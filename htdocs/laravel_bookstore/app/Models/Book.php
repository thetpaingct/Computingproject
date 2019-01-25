<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $dates = ['deleted_at'];
     protected $table = 'books';
    protected $fillable = ['name','codenumber','description','edition','price','image','author_id','genre_id','image','save_pdf','free','deleted','publishinghouse_id'];

public function genre(){
	return $this->belongsTo('App\Models\Genre','author_id');
}
public function author(){
	return $this->belongsTo('App\Models\Author','genre_id');
}
public function publishinghouse(){
	return $this->belongsTo('App\Models\Publishinghouse','publishinghouse_id');
}


 
}






