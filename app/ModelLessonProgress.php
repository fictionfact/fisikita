<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLessonProgress extends Model
{
    //
	protected $table = 'lesson_progress';

    public function user(){
    	return $this->belongsToMany('App\ModelUser', 'user_id');
    }

    public function lesson(){
    	return $this->belongsToMany('App\ModelLesson', 'lesson_id');
    }
}
