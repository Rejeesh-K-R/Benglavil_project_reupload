<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\DiscoverService;
use App\Models\Testimonial;

class BaseController extends Controller
{
    public function index(){
        $about = About::first(); // Get the first 'About' entry
        $discoverService = DiscoverService::first(); // Get the first entry from 'discover_services'
        $testimonials = Testimonial::where('status', '1')->get(); // Fetch only visible testimonials

        return view('user.index', compact('about', 'discoverService', 'testimonials'));
    }

    public function adminabout(){
        $about = About::first(); // Fetch the first record, or return null
        return view('admin.about', compact('about'));
    }

    public function update(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'discover' => 'nullable',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Fetch the existing record or create a new one
    $about = About::first();

    if ($request->hasFile('image')) {
        // Handle the image upload
        $imagePath = $request->file('image')->store('about_images', 'public');
        $about->image = $imagePath;
    }

    $about->discover = $request->discover;
    $about->title = $request->title;
    $about->description = $request->description;
    $about->save();

    return redirect()->route('admin.about')->with('success', 'Information updated successfully!');
}


}
