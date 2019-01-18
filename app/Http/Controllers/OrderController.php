<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreOrder;
use App\Client;
use App\Offer;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order.create');
    }
    
    /**
     * Display an order filtered by order_id.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function showByClient($id)
    {
        $order= Order::where('client_id','=','id');        
        
        return View::make('order.show')
            ->with('order', $order);
    }

    /**
     * Display an order filtered by order_id.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function showok()
    {        
        $offers = Offer::All();

        return view('offerbuyed', compact('offers'));
    }

    
    /**
     * @param StoreOffer $client_id, $offer_id, $quantity
     */

    public function store(Request $request){

        $request->validate([
            'quantity' => 'required|min:1'
        ]);

        Order::create([
                'offer_id' => $request->get('offer_id'),
                'client_id' => auth()->user()->client()->pluck('id')->first(),
                'quantity' => $request->get('quantity'),
        ]);

        return redirect()->route('client.profile')
            ->with('info', 'Su compra se ha realizado con éxito');

    }
}
