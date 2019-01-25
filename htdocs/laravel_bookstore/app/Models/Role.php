<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $fillable = ['role'];
     public function account()
    {
		return $this->hasMany('App\Models\Account');
	}
}
