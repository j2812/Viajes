<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'offer_id', 'client_id', 'quantity'
        ];
    
    public function offer() {    
        return $this->belongsTo('App\Offer', 'offer_id');    
    }
    
    public function client()
    {
        return $this->hasOne('App\Client');
    }
}
