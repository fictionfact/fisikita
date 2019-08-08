<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelLesson;
use App\ModelQuiz;

class ModelCourse extends Model
{
    //
    protected $table = 'course';

    protected $primaryKey = 'id_course';

    // protected $appends = array('userProgress');

    // public $id_course="";

    public function class(){
    	return $this->belongsTo('App\ModelClass', 'class_id');
    }

    public function lesson(){
    	return $this->hasMany('App\ModelLesson', 'course_id');
    }

    public function quiz(){
    	return $this->hasMany('App\ModelQuiz', 'course_id');
    }

    // public static function passData($id_course){

    // }

    // public function getUserProgressAttribute(){
    //     $userLessonProgress = ModelLesson::where('course_id', $id_course)->join('lesson_progress', 'lesson.id_lesson', '=', 'lesson_progress.lesson_id')->where('lesson_progress.user_id', auth()->user()->id_user)->get();

    //     $userQuizProgress = ModelQuiz::where('course_id', $id_course)->join('quiz_progress', 'quiz.id_quiz', '=', 'quiz_progress.quiz_id')->where('quiz_progress.user_id', auth()->user()->id_user)->get();

    //     $userProgress = count($userLessonProgress) + count($userQuizProgress);

    //     return $userProgress;
    // }

    // public function getTotalProgress(){
    //     $lesson = self::withCount('lesson')->where('id_course', $id_course)->pluck('lesson_count')->first();

    //     $quiz = self::withCount('quiz')->where('id_course', $id_course)->pluck('quiz_count')->first();

    //     $totalProgressRequired = $lesson + $quiz;

    //     return $totalProgressRequired;
    // }
}
