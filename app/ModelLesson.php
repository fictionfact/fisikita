<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLesson extends Model
{
    //
	protected $table = 'lesson';

    protected $primaryKey = 'id_lesson';

    public function course(){
    	return $this->belongsTo('App\ModelCourse', 'course_id');
    }

    public function lesson_progress(){
    	return $this->hasMany('App\ModelLessonProgress', 'lesson_id');
    }
}
