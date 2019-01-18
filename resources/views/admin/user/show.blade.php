@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalle de usuario</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-5">
                                <label style="font-weight:bold;">Nombre Completo :</label>
                            </div>
                            <div class="col-md-8 col-6">
                                {{ $user->fullname }}
                            </div>
                        </div>
                        <hr />

                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-5">
                                <label style="font-weight:bold;">Email:</label>
                            </div>
                            <div class="col-md-8 col-6">
                                {{ $user->email }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-5">
                                <label style="font-weight:bold;">Teléfono</label>
                            </div>
                            <div class="col-md-8 col-6">
                                {{ $user->phone }}
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-sm-3 col-md-3 col-5">
                                <label style="font-weight:bold;">Dirección</label>
                            </div>
                            <div class="col-md-8 col-6">
                                {{ $user->address }}
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
