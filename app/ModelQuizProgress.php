<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelQuizProgress extends Model
{
    //

    protected $table = 'quiz_progress';
    public function user(){
    	return $this->belongsToMany('App\ModelUser', 'user_id');
    }

    public function quiz(){
    	return $this->belongsToMany('App\ModelQuiz', 'quiz_id');
    }
}
