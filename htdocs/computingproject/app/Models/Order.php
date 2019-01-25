<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     protected $table = 'orders';
    protected $fillable = ['order_date','order_recieve_date','order_giveback','extra_note','statement_id','service_id','location_id','deleted','customer_id'];

//     public function customer(){
// 	return $this->hasMany('App\Models\Order');

// }

public function customer(){
  return $this->belongsTo('App\Models\Customer','customer_id');

}

  public function statement(){
	return $this->belongsTo('App\Models\Statement','statement_id');

}
  public function service(){
	return $this->belongsTo('App\Models\Service','service_id');

}
  public function location(){
	return $this->belongsTo('App\Models\Location','location_id');

}
	
}
