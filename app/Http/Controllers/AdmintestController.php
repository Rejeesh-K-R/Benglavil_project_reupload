<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdmintestController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimnials', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required',
            'job' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('testimonials', 'public');
        }

        Testimonial::create([
            'name' => $request->name,
            'testimonial' => $request->testimonial,
            'job' => $request->job,
            'image' => $imagePath,
            'status' => false, // Default to hidden
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial added successfully!');
    }

    public function edit(Testimonial $testimonial)
    {
        return response()->json($testimonial);
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required',
            'job' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $testimonial->image;
        if ($request->hasFile('image')) {
            if ($imagePath) {
                \Storage::delete('public/' . $imagePath);
            }
            $imagePath = $request->file('image')->store('testimonials', 'public');
        }

        $testimonial->update([
            'name' => $request->name,
            'testimonial' => $request->testimonial,
            'job' => $request->job,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            \Storage::delete('public/' . $testimonial->image);
        }
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }

    public function toggleStatus(Testimonial $testimonial)
    {
        $testimonial->status = !$testimonial->status;
        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Testimonial status updated!');
    }
}

