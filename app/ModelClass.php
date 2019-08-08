<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelClass extends Model
{
    protected $table = 'class';

    protected $primaryKey = 'id_class';

    public function course()
    {
        return $this->hasMany('App\Models\Course', 'class_id');
    }
}
