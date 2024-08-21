<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmincontactController;
use App\Http\Controllers\AdminserviceController;
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



