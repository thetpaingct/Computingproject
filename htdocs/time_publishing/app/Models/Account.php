<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table='accounts';
    protected $fillable=['name','email','password'];


    	public function todolist()
    {
    	return $this->hasMany('App\Models\Todolist');
    }
    
}
