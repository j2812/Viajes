@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Registro de ofertas') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('offer.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                    @if ($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" min="0" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required>

                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fromDay" class="col-md-4 col-form-label text-md-right">{{ __('Fechas de desarrollo') }}</label>

                                <div class="col-md-3">
                                    <input id="fromDay" type="date" class="form-control{{ $errors->has('fromDay') ? ' is-invalid' : '' }}" name="fromDay" value="{{ old('fromDay') }}" required>

                                    @if ($errors->has('fromDay'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fromDay') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class=""><label class="col-md-4 col-form-label text-md-right">A</label></div>
                                <div class="col-md-3">
                                    <input id="toDay" type="date" class="form-control{{ $errors->has('toDay') ? ' is-invalid' : '' }}" name="toDay" value="{{ old('toDay') }}" required>

                                    @if ($errors->has('toDay'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('toDay') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="hasDiscount" class="col-md-4 col-form-label text-md-right">{{ __('Tiene descuento?') }}</label>

                                <div class="col-md-6">
                                    <input id="hasDiscount" type="checkbox" class="form-control{{ $errors->has('hasDiscount') ? ' is-invalid' : '' }}" name="hasDiscount" value="{{ old('hasDiscount') }}" >

                                    @if ($errors->has('hasDiscount'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hasDiscount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="discountPercent" class="col-md-4 col-form-label text-md-right">{{ __('Porcentaje') }}</label>

                                <div class="col-md-6">
                                    <input id="discountPercent" type="number" min="0" max="99" step="0.1" class="form-control{{ $errors->has('discountPercent') ? ' is-invalid' : '' }}" name="discountPercent" value="{{ old('discountPercent') }}" >

                                    @if ($errors->has('discountPercent'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('discountPercent') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

                                <div class="col-md-6">
                                    <input id="file" type="file" class="form-control{{ $errors->has('file') ? ' is-invalid' : '' }}" name="file" value="{{ old('file') }}">

                                    @if ($errors->has('file'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
