<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('user.contact');
        
    }

    public function store(Request $request) {
        //validate data
        $validateData = $request -> validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
            'email' => 'required|string|email',
            'message' => 'required|string',
        ]);

        //creating contacts for instances
        $contacts = new Contacts();
        $contacts -> name = $validateData['name'];
        $contacts -> mobile = $validateData['mobile'];
        $contacts -> email = $validateData['email'];
        $contacts -> message = $validateData['message'];

        $contacts->save();

        return redirect()->route('index')->with('Form submitted');
    }
}
