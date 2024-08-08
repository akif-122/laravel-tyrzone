<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
class ManufacturerController extends Controller
{
    public function addManufacturer(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string|max:255', // Adjust validation as needed for image URLs or file paths
            'excerpt' => 'nullable|string',
            'desc' => 'nullable|string',
        ]);
         // Check if the product already exists
        $exists = Manufacturer::where('name', $request->name)->exists();

    if ($exists) {
        return redirect()->back()->withErrors('Product already exists.');
    }
        // Create a new manufacturer instance
        $manufacturer = new Manufacturer;
    
        // Manually set each attribute
        $manufacturer->name = $validatedData['name'];
        $manufacturer->image = $validatedData['image'] ?? null; // Default to null if not provided
        $manufacturer->excerpt = $validatedData['excerpt'] ?? null; // Default to null if not provided
        $manufacturer->description = $validatedData['desc'] ?? null; // Default to null if not provided
    
        // Save the manufacturer record to the database
        $manufacturer->save();
    
        // Fetch all manufacturers to display in the view
        $record = Manufacturer::all();
    return view('admin.manufacturers',compact('record'));
    }    
 public function index(){

    $record = Manufacturer::all();
    return view('admin.manufacturers',compact('record'));
}
public function destroy(Request $request)
{
    // Validate the incoming request to ensure 'name' is provided
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Retrieve the name from the request
    $name = $request->input('name');

    // Find the manufacturer by name
    $manufacturer = Manufacturer::where('name', $name)->first();

    // Check if the manufacturer exists
    // if (!$manufacturer) {
    //     return redirect()->back()->with('error', 'Manufacturer not found');
    // }

    // Delete the manufacturer
    $manufacturer->delete();

    // Redirect back with a success message
    return view('admin.manufacturers')->with('success', 'Manufacturer deleted successfully');
}
public function edit($id)
    {
        $product = Manufacturer::findOrFail($id);

        return view('admin.edit-manufacture', compact('product'));
    }
    public function update(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'id' => 'required|exists:manufacturers,id', // Ensure the ID is valid and exists
        'name' => 'required|string|max:255|unique:manufacturers,name,' . $request->input('id'), // Ensure the name is unique except for the current record
        'image' => 'nullable|string|max:255', // Adjust validation as needed for image URLs or file paths
        'excerpt' => 'nullable|string',
        'description' => 'nullable|string',
    ]);

    // Find the manufacturer by ID
    $manufacturer = Manufacturer::find($request->input('id'));

    // Check if the manufacturer exists
    if (!$manufacturer) {
        return redirect()->route('adminManufacturers')->withErrors(['Manufacturer not found']);
    }

    // Update the manufacturer record
    $manufacturer->name = $request->input('name');
    $manufacturer->image = $request->input('image');
    $manufacturer->excerpt = $request->input('excerpt');
    $manufacturer->description = $request->input('description');

    // Save the changes
    $manufacturer->save();

    // Redirect with a success message
    return redirect()->route('adminManufacturers')->with('success', 'Manufacturer updated successfully');
}

}
