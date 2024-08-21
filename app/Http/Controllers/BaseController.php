<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\DiscoverService;

class BaseController extends Controller
{
    public function index(){
        $about = About::first(); // Get the first 'About' entry
        $discoverService = DiscoverService::first(); // Get the first entry from 'discover_services'
        
        return view('user.index', compact('about', 'discoverService'));
        
    }

    public function adminabout()
{
    $about = About::first(); // Fetch the first record, or return null

    return view('admin.about', compact('about'));
}


    public function update(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'discover' => 'nullable'
    ]);

    // Get the first record or create a new one
    $about = About::firstOrCreate([], [
        'discover' => $request->discover,
        'title' => $request->title,
        'description' => $request->description,
    ]);

    // If the record already exists, update it with the new data
    $about->discover = $request->discover;
    $about->title = $request->title;
    $about->description = $request->description;
    $about->save();

    return redirect()->route('admin.about')->with('success', 'Information updated successfully!');

}


}
