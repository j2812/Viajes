<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the orders filtered by client.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::where('client_id','=','id');
        
        return View::make('offer.show')
            ->with('offer', $offer);
    }
    
    /**
     * Display an order filtered by order_id.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $offers = Offer::All();

        return View::make('offer.showall')
            ->with('offers', $offers);
    }
}
