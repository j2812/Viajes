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
    
    public function getOrder () {
        return "Order number: $this->id. Quantity: $this->quantity";
    }
    
    public function offer()
    {
        return $this->hasOne('App\Offer');
    }
    
    public function client()
    {
        return $this->hasOne('App\Client');
    }
}
