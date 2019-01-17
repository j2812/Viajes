<?php

namespace App\Http\Controllers;

use App\Client;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get an order
        $order = Order::find($id);
        $order->delete();
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

        return redirect()->route('client.profile');
    }
}
