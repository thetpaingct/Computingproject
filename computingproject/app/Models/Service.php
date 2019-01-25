<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
     protected $table = 'services';
    protected $fillable = ['service_name','service_type','service_price'];

    public function order(){
	return $this->hasOne('App\Models\Order');

}
}
