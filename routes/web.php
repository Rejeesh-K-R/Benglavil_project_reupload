<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmincontactController;
use App\Http\Controllers\AdminserviceController;
use App\Http\Controllers\AdmintestController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [BaseController::class, index] {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'about']);

Route::get('/service', [ServiceController::class, 'service']);

Route::get('/contact', [ContactController::class, 'contact'])->name('contact.form');

Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::put('/admin/{admin}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/about', [BaseController::class, 'adminabout'])->name('admin.about');
Route::put('/admin/about/update', [BaseController::class, 'update'])->name('admin.about.update');



Route::get('/admin/contact', [AdmincontactController::class, 'contact'])->name('admin.contact');
//Contact delete button
Route::delete('/admin/contact/{id}', [AdmincontactController::class, 'destroy'])->name('contact.destroy');
//Contact edit button
Route::get('/admin/contact/{id}/edit', [AdmincontactController::class, 'edit'])->name('admin.contact.edit');
//Contact update link
Route::put('/admin/contact/update/{id}', [AdmincontactController::class, 'update'])->name('admin.contact.update');






Route::get('/admin/services', [AdminserviceController::class, 'service'])->name('admin.services');

Route::post('/admin/services/store', [AdminserviceController::class, 'store'])->name('admin.services.store');
Route::put('/admin/services/update/{service}', [AdminserviceController::class, 'update'])->name('admin.services.update');
Route::put('/admin/services/update/{id}', [AdminserviceController::class, 'update'])->name('admin.services.update');

Route::get('/admin/services/edit/{id}', [AdminserviceController::class, 'edit'])->name('admin.services.edit');
Route::post('/admin/services/update/{id}', [AdminserviceController::class, 'update'])->name('admin.services.update');
Route::delete('/admin/services/delete/{id}', [AdminserviceController::class, 'destroy'])->name('admin.services.delete');


//Discover Services path
Route::get('/admin/services/edit-discover', [AdminserviceController::class, 'editDiscoverService'])->name('admin.services.edit-discover');
Route::put('/admin/services/update-discover', [AdminserviceController::class, 'updateDiscoverService'])->name('admin.services.update-discover');
//new one just try out
Route::post('/admin/services/update-discover', [AdminserviceController::class, 'updateDiscoverService'])->name('admin.services.updateDiscoverService');




Route::get('/admin/serviceform', [AdminserviceController::class, 'servicesform'])->name('admin.serviceform');


Route::prefix('admin')->group(function () {
    Route::get('/testimonials', [AdmintestController::class, 'index'])->name('admin.testimonials.index');
    Route::post('/testimonials', [AdmintestController::class, 'store'])->name('admin.testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [AdmintestController::class, 'edit'])->name('admin.testimonials.edit');
    Route::put('/testimonials/{testimonial}', [AdmintestController::class, 'update'])->name('admin.testimonials.update');
    Route::delete('/testimonials/{testimonial}', [AdmintestController::class, 'destroy'])->name('admin.testimonials.destroy');
    Route::post('/testimonials/{testimonial}/toggle-status', [AdmintestController::class, 'toggleStatus'])->name('admin.testimonials.toggleStatus');
});






//Gallery
// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::get('gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('gallery/{id}', [GalleryController::class, 'showAdmin'])->name('gallery.showAdmin');
    Route::put('gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update'); // <-- This should be correct
    Route::delete('gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});


// User Routes
Route::get('gallery', [GalleryController::class, 'indexUser'])->name('user.gallery.index');
Route::get('gallery/{id}', [GalleryController::class, 'showUser'])->name('user.gallery.show');


Route::delete('/admin/gallery/{id}/delete_image', [GalleryController::class, 'deleteImage'])->name('admin.gallery.delete_image');

Route::put('/admin/gallery/{id}', [GalleryController::class, 'update'])->name('admin.gallery.update');



Route::put('/admin/gallery/{gallery_id}/update_image/{image_id}', [GalleryController::class, 'updateImage'])->name('admin.gallery.update_image');

Route::get('admin/gallery/{id}/add-images', [GalleryController::class, 'addImagesForm'])->name('admin.gallery.addImages');
Route::post('admin/gallery/{id}/store-images', [GalleryController::class, 'storeImages'])->name('admin.gallery.storeImages');
