@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="products" class="row view-group">
                    @forelse($offers as $offer)
                    <div class="item col-xs-4 col-lg-4">
                        <div class="thumbnail card">
                            <div class="img-event">
                                @if($offer->file)
                                    <img
                                        class="group list-group-image img-fluid"
                                        src={{ $offer->file }} alt="" />
                                @endif
                            </div>
                            <div class="caption card-body">
                                <h4 class="group card-title inner list-group-item-heading">
                                    {{ $offer->city }}</h4>
                                <p class="group inner list-group-item-text">
                                    Del {{ $offer->fromDay->format('d/M/Y')}} al {{ $offer->toDay->format('d/M/Y') }}
                                    @if ($offer->hasDiscount)
                                        {{ $offer->pdiscountPercent}}
                                    @endif
                                </p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            ${{ $offer->price }}</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href={{ route('offer.show', $offer->id) }}>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <p>No hay ofertas</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
