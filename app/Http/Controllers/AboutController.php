<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\DiscoverService;
use App\Models\Testimonial;


class AboutController extends Controller
{
    public function about(){
        $about = About::first(); // Reusing the same data
        $discoverService = DiscoverService::first(); // Get the first entry from 'discover_services
        $testimonials = Testimonial::where('status', '1')->get(); // Fetch only visible testimonials

        return view('user.about', compact('about', 'discoverService', 'testimonials'));
        
    }
}
