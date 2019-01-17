<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = ['user_id'];

    public function users() {
        return $this->belongsTo('App\User');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Order');
    }

}
