<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    use Notifiable;
    
    protected $table = 'offers';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city', 'description', 'price', 'fromDay', 'toDay', 'hasDiscount', 'discountPercent'
        ];
    
    public function getFullOffer () {

        return "City: $this->city. \n $this->description \n Price: $this->description"
                . " \n From day: $this->fromDay To day: $this->toDay.\n Discount: $this->discountPercent";
    }
    
    public function offer()
    {
        return $this->hasMany('App\Order');
    }
}
