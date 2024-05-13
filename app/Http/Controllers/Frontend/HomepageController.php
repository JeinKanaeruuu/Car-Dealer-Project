<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('Frontend.homepage', compact('cars'));
    }
}
