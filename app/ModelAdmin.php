<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ModelAdmin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admin';

    protected $primaryKey = 'id_admin';

    protected $fillable = [
    	'username'
    ];

    protected $hidden = [
    	'password'
    ];

    public function getAuthPassword()
    {
 		return $this->password;
    }
}
