<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishinghouse extends Model
{
    //
     protected $table = 'Publishinghouse';
    protected $fillable = ['name'];

    public function book()
    {
		return $this->hasOne('App\Models\Book');
	}
}
