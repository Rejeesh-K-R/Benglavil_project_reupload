<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'cover_image'];

    public function images()
    {
        return $this->hasMany(Image::class);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        $coverImage = $request->file('cover_image')->store('gallery_cover_images');

        $gallery = Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $coverImage,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('gallery_images');
                $gallery->images()->create(['image_path' => $imagePath]);
            }
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully');
    }

}

