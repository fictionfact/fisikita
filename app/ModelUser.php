<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelUser extends Authenticatable implements JWTSubject
{
    protected $table = 'user';

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'username', 'password'
    ];

    public function lesson(){
    	return $this->belongsToMany('App\ModelLessonProgress');
    }

    public function quiz(){
    	return $this->belongsToMany('App\ModelQuizProgress');
    }/**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
