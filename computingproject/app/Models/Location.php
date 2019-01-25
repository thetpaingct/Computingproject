<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
     protected $table = 'locations';
    protected $fillable = ['location_name'];

    public function order(){
	return $this->hasOne('App\Models\Order');

}
}
