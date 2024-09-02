<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Models\DiscoverService;
use Illuminate\Http\Request;
//$services = Services::all();

//return view('user.services', compact('services'));
class AdminserviceController extends Controller
{
    public function service()
{
    $services = Services::all();
    $discoverService = DiscoverService::first(); // Fetch the first record from DiscoverService

    // Pass the $services and $discoverService to the view
    return view('admin.services', compact('services', 'discoverService'));
}

    //Service store page
    public function servicesform(){
        return view('admin.serviceform');
    }

    public function store(Request $request) {
        try {
            // Validate the request data
            $request->validate([
                'service_name' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
    
            // Initialize image path
            $imagepath = null;
    
            // Handle the file upload
            if ($request->hasFile('image')) {
                $imagepath = $request->file('image')->store('service', 'public');
            }
    
            // Create a new service record
            Services::create([
                'service_name' => $request->service_name,
                'description' => $request->description,
                'image' => $imagepath,
            ]);
    
            // Redirect with success message
            return redirect()->route('admin.services')->with('success', 'Service added successfully!');
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Service Store Error: ' . $e->getMessage());
    
            // Redirect with error message
            return redirect()->back()->with('error', 'An error occurred while adding the service: ' . $e->getMessage());
        }
    }
    



    //Add button for the services
//     public function store(Request $request)
// {
//     $request->validate([
//         'service_name' => 'required',
//         'description' => 'required',
//         'image' => 'nullable|image'
//     ]);

//     // Handle the file upload
//     if ($request->hasFile('image')) {
//         $path = $request->file('image')->store('public/services');
//     } else {
//         $path = null;
//     }

//     // Create the service
//     Service::create([
//         'service_name' => $request->service_name,
//         'description' => $request->description,
//         'image' => $path,
//     ]);

//     return response()->json(['success' => true]);
// }






    //Edit button for the services
    public function edit($id)
{
    $service = Services::find($id);
    return response()->json($service);
}

public function update(Request $request, $id)
{
    try {
        // Validate the request data
        $request->validate([
            'service_name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the service by its ID
        $service = Services::find($id);

        // Update the service details
        $service->service_name = $request->service_name;
        $service->description = $request->description;

        // Handle the file upload if an image was provided
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('services', 'public');
            $service->image = $path;
        }

        // Save the updated service details
        $service->save();

        // Redirect with success message
        return redirect()->route('admin.services')->with('success', 'Service updated successfully!');
    } catch (\Exception $e) {
        // Log the error message for debugging
        \Log::error('Service Update Error: ' . $e->getMessage());

        // Return with an error message
        return redirect()->back()->with('error', 'An error occurred while updating the service: ' . $e->getMessage());
    }
}




//Delete button for the services
public function destroy($id)
{
    $service = Services::find($id);

    if ($service) {
        $service->delete();
        return redirect()->route('admin.services')->with('success', 'Service deleted successfully!');
    } else {
        return redirect()->route('admin.services')->with('error', 'Service not found!');
    }
}



    //new discover services function

    public function editDiscoverService()
    {
        $discoverService = DiscoverService::first();
        return response()->json($discoverService);
    }

    // Method to update the Discover Our Services section
    public function updateDiscoverService(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    // Check if a DiscoverService record exists
    $discoverService = DiscoverService::first();

    if (!$discoverService) {
        // If not, create a new record
        $discoverService = new DiscoverService();
    }

    // Update the record
    $discoverService->title = $request->title;
    $discoverService->description = $request->description;
    $discoverService->save();

    return redirect()->route('admin.services')->with('success', 'Discover Our Services section updated successfully!');
}



}



