<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->has('search')) {
            $query->where('title', 'like', '%' . $request->input('search') . '%');
        }

        $cars = $query->paginate(3);

        return view('frontend.car', compact('cars'));
    }

    public function show(Car $car)
    {
        $related_cars = Car::paginate(3);

        return view('frontend.detail', compact('car', 'related_cars'));
    }
}

