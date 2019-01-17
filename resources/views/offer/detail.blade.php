@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card mb-10">
                    <div class="card-body store-body">
                        <div class="product-info">
                            <div class="product-gallery">
                                <div class="product-gallery-featured">
                                    <img src="{{ $offer->file }}" alt="" height="200" width="400">
                                </div>
                            </div>
                            <div class="product-seller-recommended">
                                @if ($randoms)
                                    <h3 class="mb-5">Más ofertas</h3>
                                    <div class="recommended-items card-deck">
                                        @forelse($randoms as $random)
                                            <div class="card">
                                                <img src="{{ $random->file }}" alt="" class="card-img-top" height="60" width="140">
                                                <div class="card-body">
                                                    <h5 class="card-title">U$ {{ $random->price }}</h5>
                                                    <span class="text-muted"><a href="{{ route('offer.show', $random->id) }}"><small>{{ $random->city }}</small></a></span>
                                                </div>
                                            </div>
                                        @empty
                                            "no hay ofertas"
                                        @endforelse
                                    </div>
                                @endif
                                <!-- /.recommended-items-->
                                <p class="mb-5 mt-5"></p>
                                <div class="product-description mb-5">
                                    <h2 class="mb-5">Descripción</h2>
                                    <p>{{ $offer->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-payment-details">
                            <h4 class="product-title mb-2">{{ $offer->city }}</h4>
                            <h2 class="product-price display-4">$ {{ $offer->price }}</h2>
                            <p class="text-success">
                                <i class="fa fa-credit-card"></i>
                                Del {{ $offer->fromDay->format('d-M-Y') }} al
                                {{ $offer->toDay->format('d-M-Y') }}
                            </p>
                            <form method="post" action="{{ route('order.store') }}">
                                @csrf
                                {{ Auth::user()->client()->pluck('id')->first() }}
                                <label for="quanty">Cantidad</label>
                                <input type="hidden" id="offer_id" name="offer_id" value="{{ $offer->id }}">
                                <input type="number" name="quantity" min="1"
                                       id="quantity" class="form-control
                                       mb-5 input-lg {{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                       placeholder="Ingrese una cantidad">
                                <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                                <input type="hidden" name="client_id" value="{{ auth()->user()->id }}">
                                <button type="submit"  class="btn btn-primary btn-lg btn-block">Comprar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
