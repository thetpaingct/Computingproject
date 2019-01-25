<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
    protected $fillable = ['customer_name','NRC','phone_no','address','additional_notes','customer_at_id','gmail','vehicle'];

//     public function order(){
// 	return $this->belongsTo('App\Models\Order','order_id');

// }
	// public function vehicle(){
	// 	return $this->belongsTo('App\Models\Vehicle','vehical_id');

	// }

	public function customerattitute(){
		return $this->belongsTo('App\Models\Customersattitude','customer_at_id');

	}
// 	   public function vehicle(){
// 	return $this->hasMany('App\Models\Vehicle');
// }
  public function order(){
	return $this->hasMany('App\Models\Order');
}
}
