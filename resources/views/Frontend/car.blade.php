@extends('frontend.layout')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight"         
@php
$landingPage = \App\Models\LandingPages::where('image_title', 'Cars')->first();
@endphp

style="background-image: url('{{ $landingPage->image_url }}');">
<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                            class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i
                        class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
        </div>
    </div>
</div>
</section>

<section class="ftco-section bg-light">
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12">
            <form action="{{ route('cars') }}" method="GET" class="search-form">
                <div class="form-group d-flex">
                    <input type="text" name="search" class="form-control" placeholder="Search by car title">
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach($cars as $car)
        <div class="col-md-4">
            <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end"
                    style="background-image: url({{ Storage::url($car->thumbnail) }});">
                </div>
                <div class="text">
                    <h2 class="mb-0"><a href="{{ route('car.show', $car->slug) }}">{{ $car->title }}</a></h2>
                    <div class="d-flex mb-3">
                        <p class="price ml-auto">${{ $car->price }} <span>/day</span></p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="https://api.whatsapp.com/send/?phone=%2B6281549216635&text=Hello there" class="btn btn-primary py-2 mr-1">Book now</a> <a
                            href="{{ route('car.show', $car->slug) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center mt-5">
        <div class="text-center">
            {{ $cars->links() }}
        </div>
    </div>
</div>
</section>
@endsection
