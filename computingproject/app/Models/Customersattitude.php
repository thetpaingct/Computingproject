<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customersattitude extends Model
{
    //
     protected $table = 'customerattitude';
    protected $fillable = ['attitude_level'];

    public function customer(){
	return $this->hasOne('App\Models\Customer');

}
}
