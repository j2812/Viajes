<?php

namespace App\Http\Controllers;

use App\Client;
use App\Offer;
use App\Admin;
use App\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * ClientController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $countOrders= Order::All()->count();
        $countQuantity= Order::All()->sum('quantity');
        $admin= Admin::All()->where('user_id',auth()->user()->id);
        $orders= Order::All()->where('client_id',auth()->user()->client()->pluck('id')->first());

        return view('client.profile',
                    compact('orders', 'countOrders', 'countQuantity','admin'));
    }

}
