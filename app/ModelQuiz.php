<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelQuiz extends Model
{
    //
	protected $table = 'quiz';

    protected $primaryKey = 'id_quiz';

    public function course(){
    	return $this->belongsTo('App\ModelCourse', 'course_id');
    }
}
