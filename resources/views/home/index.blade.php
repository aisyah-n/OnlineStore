@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', 'Home Page')

@section('content')

<div class="text-center">

    <h1>Welcome to the Online Store</h1>

    <p>
        Browse our products and enjoy shopping.
    </p>

</div>

<div class="row">

    <div class="col-md-4 col-lg-4 mb-2">
        <img src="{{ asset('/storage/game.png') }}"
             class="img-fluid rounded">
    </div>

    <div class="col-md-4 col-lg-4 mb-2">
        <img src="{{ asset('/storage/safe.png') }}"
             class="img-fluid rounded">
    </div>

    <div class="col-md-4 col-lg-4 mb-2">
        <img src="{{ asset('/storage/submarine.png') }}"
             class="img-fluid rounded">
    </div>

</div>

@endsection