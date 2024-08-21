<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\DiscoverService;

class AboutController extends Controller
{
    public function about(){
        $about = About::first(); // Reusing the same data
        $discoverService = DiscoverService::first(); // Get the first entry from 'discover_services
        return view('user.about', compact('about', 'discoverService'));
        
    }
}
