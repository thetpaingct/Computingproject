<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    //
     protected $table='todolists';
    protected $fillable=['list','note','account_id'];

public function account()
    {
    	return $this->belongsTo('App\Models\Account','account_id');
    }
}
