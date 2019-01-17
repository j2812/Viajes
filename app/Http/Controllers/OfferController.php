<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOffer;
use App\Offer;
use App\Order;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
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
     * Display the orders filtered by client.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offer = Offer::get($id);

        return view('offer.detail', compact('offer'));
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

        return view('welcome', compact('offers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {

        return view('offer.create');
    }

    /**
     * @param StoreOffer $request
     */
    public function store(StoreOffer $request){

        $offer = Offer::create($request->all());

        if ($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $offer->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('home');
    }
}
