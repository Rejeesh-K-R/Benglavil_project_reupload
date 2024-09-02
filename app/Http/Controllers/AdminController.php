<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\About;
use App\Models\Services;
use App\Models\Testimonial;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $about = About::first();
        $services = Services::all();
        $contacts = Contacts::all();
        $testimonials = Testimonial::all();
        
    
        
        return view('admin.index', compact('about', 'services','contacts','testimonials'));
    }

    public function update(Request $request, Admin $admin)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $admin->name = $request->name;

    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $admin->image = $imageName;
    }

    $admin->save();

    return response()->json(['success' => true, 'admin' => $admin]);
}
}
