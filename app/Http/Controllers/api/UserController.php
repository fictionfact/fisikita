<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelClass;
use App\ModelCourse;
use App\ModelLesson;
use App\ModelQuiz;
use App\ModelLessonProgress;
use App\ModelQuizProgress;
use App\ModelUser;
use DB;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function class(){
    	$result = ModelClass::with('course')->get();
    	return response()->json($result->toArray());
        // return $result;
        // return $result->toJson();
    }

    public function courseByClass($id){
        $result = ModelCourse::where('class_id', $id)->with('lesson', 'quiz')->get();
        return response()->json($result->toArray());
    }

    public function course($id){
    	$result = ModelCourse::with('lesson', 'quiz')->find($id);
    	// return response()->json($result->toArray());
        return $result->toJson();
    }

    public function lesson($id){
    	$result = ModelLesson::find($id);
    	// return response()->json($result->toArray());
        return $result->toJson();
    }

    public function lessonByCourse($id){
        $result = ModelLesson::with('lesson_progress')->where('course_id', $id)->get();
        return response()->json($result->toArray());
    }

    public function quiz($id){
        $result = ModelQuiz::find($id);
        // return response()->json($result->toArray());
        return $result->toJson();
    }

    public function quizByCourse($id){
        $result = ModelQuiz::where('course_id', $id)->get();
        // return response()->json($result->toArray());
        return $result->toJson();
    }

    public function completeLesson($id){
    	$complete = new ModelLessonProgress;

    	$complete->user_id = auth()->user()->id_user;
    	$complete->lesson_id = $id;
    	$complete->completed = true;

    	try{
	    	if(! $complete->save()){
	    		return response()->json(['success' => false , 'message' => 'Error occured, please try again later.']);
	    	} else {
	    		return response()->json(['success' => true, 'message' => 'Saved successfully.']);
	    	}
	    } catch(\Illuminate\Database\QueryException $e){
	    	return response()->json(['success' => false, 'message' => 'Error occured: '.$e]);
	    }
    }

    public function completeQuiz($id){
    	$complete = new ModelQuizProgress;

    	$complete->user_id = auth()->user()->id_user;
    	$complete->quiz_id = $id;
    	$complete->completed = true;
    	try{
    		if(! $complete->save()){
	    		return response()->json(['success' => false , 'message' => 'Error occured, please try again later.']);
	    	} else {
	    		return response()->json(['success' => true, 'message' => 'Saved successfully.']);
	    	}
    	} catch(\Illuminate\Database\QueryException $e){
    		return response()->json(['success' => false, 'message' => 'Error occured: '.$e]);
    	}
    }

    public function getLessonProgress($id_lesson){
        $result = ModelLessonProgress::where('lesson_id', $id_lesson)->where('user_id', auth()->user()->id_user)->get();
        return $result->toJson();
    }


    public function getQuizProgress($id_quiz){
        $result = ModelQuizProgress::where('quiz_id', $id_quiz)->where('user_id', auth()->user()->id_user)->first();
        return $result->toJson();
    }

    public function getLessonProgressByUser(){
        $result = ModelLessonProgress::where('user_id', auth()->user()->id_user)->get();
        return $result->toJson();
    }

    public function getQuizProgressByUser(){
        $result = ModelQuizProgress::where('user_id', auth()->user()->id_user)->get();
        return $result->toJson();
    }

    public function getCurrentProgress($id_course){
        $userLessonProgress = ModelLesson::where('course_id', $id_course)->join('lesson_progress', 'lesson.id_lesson', '=', 'lesson_progress.lesson_id')->where('lesson_progress.user_id', auth()->user()->id_user)->get();

        $userQuizProgress = ModelQuiz::where('course_id', $id_course)->join('quiz_progress', 'quiz.id_quiz', '=', 'quiz_progress.quiz_id')->where('quiz_progress.user_id', auth()->user()->id_user)->get();

        $userQuizProgressCount = count($userQuizProgress);

        $lesson = ModelCourse::withCount('lesson')->where('id_course', $id_course)->pluck('lesson_count')->first();

        $quizCount = ModelCourse::withCount('quiz')->where('id_course', $id_course)->pluck('quiz_count')->first();

        if ($userQuizProgressCount == $quizCount && $quizCount != 0) {
            $userQuizProgressCount = 1;
        } else {
            $userQuizProgressCount = 0;
        }
        
        if ($quizCount>=2) {
            $quiz=1;
        } else {
            $quiz = $quizCount;
        }

        $userProgress = count($userLessonProgress) + $userQuizProgressCount;

        $totalProgressRequired = $lesson + $quiz;

        return response()->json(['user_progress' => $userProgress, 'total_progress' => $totalProgressRequired]);
    }

    public function checkQuizDone($id_course){
        $quizID = ModelCourse::with('quiz')->where('id_course', $id_course)->first();
        $quizIDs = $quizID['quiz'];

        $ids_quiz = [];

        foreach ($quizIDs as $key) {
            $id = $key['id_quiz'];
            array_push($ids_quiz, $id);
        }

        // return $ids_quiz;

        $quiz = ModelCourse::withCount('quiz')->where('id_course', $id_course)->pluck('quiz_count')->first();
        $userProgress = ModelQuizProgress::where('user_id', auth()->user()->id_user)->whereIn('quiz_id', $ids_quiz)->get();
        $userProgressCount = $userProgress->count();

        // return $userProgress->toJson();

        $checkExist = ModelQuiz::where('course_id', $id_course)->count();
        

        // return response()->json(['total_quiz' => $quiz, 'user_progress' => $userProgressCount]);
        if($checkExist == 0) {
            return 2; // quiz not exist
        } else if ($userProgressCount == $quiz) {
            return 1; // quiz dones
        } else {
            return 0; // quiz is not done
        }
    }
}
