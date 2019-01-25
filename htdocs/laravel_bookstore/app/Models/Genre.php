<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $table = 'genre';
    protected $fillable = ['genre'];

    public function book()
    {
		return $this->hasOne('App\Models\Book');
	}
}
