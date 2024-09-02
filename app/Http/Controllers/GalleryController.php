<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    // Admin: Show all galleries
    public function index()
    {
        $galleries = Gallery::with('images')->get();
        return view('admin.gallery', compact('galleries'));
    }

    // Admin: Show create gallery form
    public function create()
    {
        return view('admin.gallery_create');
    }

    // Admin: Store new gallery
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $coverImage = $request->file('cover_image')->store('gallery_cover_images', 'public');

        $gallery = Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $coverImage,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image) {
                    $imagePath = $image->store('gallery_images', 'public');
                    $gallery->images()->create(['image_path' => $imagePath]);
                }
            }
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully');
    }

    // Admin: Show specific gallery
    public function showAdmin($id)
    {
        $gallery = Gallery::with('images')->findOrFail($id);
        return view('admin.gallery_show', compact('gallery'));
    }

    // User: Show all galleries
    public function indexUser()
    {
        $galleries = Gallery::with('images')->get();
        return view('user.gallery', compact('galleries'));
    }

    // User: Show specific gallery
    public function showUser($id)
    {
        $gallery = Gallery::with('images')->findOrFail($id);
        return view('user.gallery_show', compact('gallery'));
    }


    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete associated images
        foreach ($gallery->images as $image) {
            // Delete the image file from storage
            \Storage::disk('public')->delete($image->image_path);
        }

        // Delete the gallery itself
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully');
    }



    //update for the show page
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery_images', 'public');
            $gallery->image_path = $path;
        }

        $gallery->save();

        return redirect()->route('admin.gallery.showAdmin', $id)->with('success', 'Gallery updated successfully');

    }


    //Update image in the gallery view table
    public function updateImage(Request $request, $gallery_id, $image_id)
{
    $image = Image::findOrFail($image_id);

    if ($request->hasFile('image')) {
        // Delete the old image from storage
        \Storage::disk('public')->delete($image->image_path);

        // Store the new image
        $newImagePath = $request->file('image')->store('gallery_images', 'public');

        // Update the image path in the database
        $image->image_path = $newImagePath;
        $image->save();
    }

    return redirect()->route('admin.gallery.showAdmin', $gallery_id)->with('success', 'Image updated successfully');
}


    //delete for each images in the gallery
    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);

        // Delete the image file from storage
        \Storage::disk('public')->delete($image->image_path);

        // Delete the image record from the database
        $image->delete();

        return redirect()->route('admin.gallery.showAdmin', $image->gallery_id)->with('success', 'Image deleted successfully');
    }


    public function addImagesForm($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery_add_images', compact('gallery'));
    }

    public function storeImages(Request $request, $id)
    {
        $request->validate([
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                if ($image) {
                    $imagePath = $image->store('gallery_images', 'public');
                    $gallery->images()->create(['image_path' => $imagePath]);
                }
            }
        }

        return redirect()->route('admin.gallery.showAdmin', $id)->with('success', 'Images added successfully');
    }



}
