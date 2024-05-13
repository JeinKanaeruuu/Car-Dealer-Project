<?php

namespace App\Http\Controllers;

use App\Models\LandingPages; // Import the LandingPage model
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Fetch the landing page data from your database
        $landingPage = LandingPages::first(); // Assuming you want the first landing page

        // Pass the $landingPage variable to your Blade view
        return view( compact('landingPages'));
    }
}
