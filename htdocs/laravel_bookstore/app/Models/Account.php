<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $fillable = ['name','password','role_id','email'];

    public function role(){
	return $this->belongsTo('App\Models\Role','role_id');
}
}
