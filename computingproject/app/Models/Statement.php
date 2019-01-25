<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    //
     protected $table = 'statements';
    protected $fillable = ['statement_type'];

    public function order(){
	return $this->hasOne('App\Models\Order');

}
}
