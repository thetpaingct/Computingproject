<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'authors';
    protected $fillable = ['name','phone_no','gender','dob','address','email'];
    public function book()
    {
		return $this->hasOne('App\Models\Book');
	}
}
