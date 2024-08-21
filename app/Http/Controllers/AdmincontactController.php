<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class AdmincontactController extends Controller
{
    public function contact(){
        $contacts = Contacts::all();
        return view('admin.contact', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contacts::find($id); // Corrected to use the right model name
        if ($contact) {
            $contact->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Contact not found.'], 404);
        }
    }

    public function edit($id)
    {
        $contact = Contacts::find($id);
        if ($contact) {
            return response()->json($contact);
        } else {
            return response()->json(['message' => 'Contact not found'], 404);
        }
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $contact = Contacts::find($id);
        if ($contact) {
            $contact->name = $request->name;
            $contact->mobile = $request->mobile;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();

            return redirect()->route('admin.contact')->with('success', 'Contact updated successfully!');
        } else {
            return redirect()->route('admin.contact')->with('error', 'Contact not found!');
        }
    }


}
