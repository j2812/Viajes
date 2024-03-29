@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Perfil</div>

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">
                                        {{ auth()->user()->name }}
                                    </h2>
                                    <h6 class="d-block">{{ auth()->user()->surname }}</h6>
                                    <h6 class="d-block">{{ auth()->user()->identification_document}}</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Información Básica</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">


                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Nombre Completo :</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->fullname }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Email:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->email }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Teléfono</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->phone }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Dirección</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ auth()->user()->address }}
                                            </div>
                                        </div>     
                                        <hr />
                                        <hr />
                                        @if(Auth::user()->admin()->pluck('id')->first())
                                        <h4 style="font-weight:bold;">Información administrador</h4>
                                        <!-- Esto solo lo verá el administrador -->
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Total de pedidos clientes</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $countOrders }}
                                            </div>                                                                                    </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Cantidad de turistas</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $countQuantity }}
                                            </div>
                                        </div>
                                        <!-- Esto solo lo verá el administrador -->
                                        <hr />
                                        @endif
                                        <div class="row">
                                            <div>
                                                </br>
                                                <h4 style="font-weight:bold;">Tus pedidos</h4>
                                                </br>
                                                @forelse($orders as $order)
                                                <li><b>Número de pedido {{$order->id}}</b> con destino a {{$order->offer->city}}. Número de viajeros: {{$order->quantity}}. Precio total: {{($order->quantity * $order->offer->price)}} $</li>
                                                @empty
                                                <li>No hay pedidos</li>
                                                @endforelse
                                            </div>                                            
                                        </div>
                                        <hr />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
