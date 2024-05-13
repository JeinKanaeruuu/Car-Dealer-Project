<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index ()
    {
        $cars = Car::paginate(3);

        return view('frontend.car', compact('cars'));
    }

    public function show (Car $car)
    {
        $related_cars = Car::Get();

        return view('frontend.detail', compact('car', 'related_cars'));
    }
}
