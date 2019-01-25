<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    //
    protected $table='accounts';
    protected $fillable=['name','email','password','phone_no','role_id'];

    public function role()
    {
    	return $this->belongsTo('App\Models\Role','role_id');
    }

    

}
