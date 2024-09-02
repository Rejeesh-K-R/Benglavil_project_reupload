<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $services = Services::all();
        

        return view('user.services', compact('services'));
        
    }
}
