@extends('frontend.layout')

@section('content')

<div class="hero-wrap ftco-degree-bg" 
    @php
    $landingPage = \App\Models\LandingPages::where('image_title', 'Head')->first();
    @endphp

style="background-image: url('{{ $landingPage->image_url }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <p style="font-size: 18px;">Enhance Your Car Experience at AidilCar: Superior Quality, Best Service!</p>
                    <a href="https://vimeo.com/45830194"
                        class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                    </a>
                    <p class="mt-3 text-left">
                        <a href="{{ url('/jein/login') }}" class="btn btn-primary mt-4" 
                           style="opacity: 0; pointer-events: auto; position: relative;">
                            Admin Login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12 featured-top">
                <div class="row justify-content-center no-gutters">
                    <div class="col-md-10 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section text-center mb-4">Better Way to Rent Your Perfect Cars</h3>
                            <div class="row d-flex mb-4">
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-route"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Choose Your Pickup Location</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-handshake"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Select the Best Deal</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="flaticon-rent"></span></div>
                                        <div class="text w-100 text-center mx-auto m-auto">
                                            <h3 class="heading mb-2 text-center">Reserve Your Rental Car</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center mt-5"><a target="_blank"
                                    href="https://api.whatsapp.com/send/?phone=%2B6281549216635&text=Hello there"
                                    class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Reserve Your Perfect
                                    Car</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">Featured Vehicles</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach($cars as $car)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ Storage::url($car->thumbnail) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="#">{{ $car->title }}</a></h2>
                                <div class="d-flex mb-3">
                                    <p class="price ml-auto">${{ $car->price }} <span>/day</span></p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="https://api.whatsapp.com/send/?phone=%2B6281549216635&text=Hello there" class="btn btn-primary py-2 mr-1">Book now</a>
                                    <a href="{{ route('car.show', $car->slug) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            @php
                $landingPage = \App\Models\LandingPages::where('image_title', 'about')->first();
            @endphp
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url('{{ $landingPage->image_url }}');">
            </div>

            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Welcome to AidilCar</h2>
                    <p>Welcome to AidilCar, your premier destination for exceptional automotive experiences. 
                        Founded with a passion for excellence and a commitment to customer satisfaction, AidilCar has established itself as a trusted name in the automotive industry.
                    </p>
                    <p>
                        Our Mission:
                        At AidilCar, we strive to provide our customers with top-notch quality vehicles and unparalleled service. 
                        Our mission is to make your car buying journey seamless, enjoyable, and memorable.</p>
                    <a href="{{ route('cars') }}" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-3">Our Latest Services</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-wedding-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Wedding Ceremony</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">City Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-car"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Airport Transfer</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="flaticon-transportation"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Whole City Tour</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-intro" 
        @php
        $landingPage = \App\Models\LandingPages::where('image_title', 'Driver')->first();
        @endphp

    style="background-image: url('{{ $landingPage->image_url }}');">
    
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white ftco-animate">
                <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
                <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B6281549216635&text=Saya Mau Join Driver"
                    class="btn btn-primary btn-lg">Become A Driver</a>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url({{asset('frontend/images/jein.jpg')}})">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Dengan website ini saya memiliki banyak mobil trial, makasih banyak aidil car telah hadir
                                    untuk memenuhi kebutuhan peminjaman saya.
                                </p>
                                <p class="name">Jein Ananda</p>
                                <span class="position">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url({{asset('frontend/images/ical.jpg')}})">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">mantap bos. saya telah meminjam banyak mobil dari website ini, saya resmi harusnya mendapat
                                    gelar fans no 1 AidilCar.
                                </p>
                                <p class="name">Muhammad Syahril Faizal</p>
                                <span class="position">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">
                            <div class="user-img mb-2" style="background-image: url({{asset('frontend/images/gaylih.jpg')}})">
                            </div>
                            <div class="text pt-4">
                                <p class="mb-4">Saya sangat menyukai website ini, ada mobil Mclaren yang bisa saya sewa sehingga 
                                    dapat memikat wanita cantik diluar sana hehe.</p>
                                <p class="name">Priyo Gaylih Prasetyo</p>
                                <span class="position">Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
