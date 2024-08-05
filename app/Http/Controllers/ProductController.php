<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    public function add(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|url',
            'manu_name' => 'required|string|max:255',
            'patteren_type' => 'required|string|max:255',
            'fuel' => 'required|string|max:255',
            'wet_grip' => 'required|string|max:255',
            'road_noise' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'season' => 'required|integer|between:0,2',
            'budget' => 'nullable|boolean',
            'price' => 'required|numeric|min:0',
        ]);

        // Check if the product already exists
        $exists = Product::where('name', $request->name)
            ->where('manufacturer_name', $request->manu_name)
            ->exists();

        if ($exists) {
            return redirect()->back()->withErrors('Product already exists.');
        }

        // Create and save the new product
        Product::create([
            'name' => $request->name,
            'image' => $request->image,
            'manufacturer_name' => $request->manu_name,
            'tyre_pattern' => $request->patteren_type,
            'fuel_efficiency' => $request->fuel,
            'wet_grip' => $request->wet_grip,
            'road_noise' => $request->road_noise,
            'size' => $request->size,
            'tyre_type' => $request->type,
            'season' => $request->season,
            'budget_tyres' => $request->budget ? true : false,
            'price' => $request->price,
        ]);

        return redirect()->route('adminProducts');
    }
    // public function showProducts(){

    //     // Redirect with a success message
    //     $products = Product::all();

    //     // Pass products to the view
    //     return view('products', compact('products'));
    // }
    // public function addPage(){
    //     return view('addProducts');
    // }

    // UPDATE PRODUCT
    public function update(Request $request)
{
    // Find the product by name and manufacturer name
    $product = Product::where('name', $request->input('original_name'))
                       ->where('manufacturer_name', $request->input('original_manufacturer'))
                       ->first();

    if (!$product) {
        return redirect()->back()->withErrors(['Product not found']);
    }

    // Update fields except name and manufacturer name
    $product->image = $request->input('image', $product->image);
    $product->patteren_type = $request->input('patteren_type', $product->patteren_type);
    $product->fuel = $request->input('fuel', $product->fuel);
    $product->wet_grip = $request->input('wet_grip', $product->wet_grip);
    $product->road_noise = $request->input('road_noise', $product->road_noise);
    $product->size = $request->input('size', $product->size);
    $product->type = $request->input('type', $product->type);
    $product->season = $request->input('season', $product->season);
    $product->budget = $request->has('budget') ? 1 : 0;
    $product->price = $request->input('price', $product->price);

    $product->save();

    return redirect()->route('products')->with('success', 'Product updated successfully');
}
public function showInfo()
{
    // Fetch all products from the database
    $products = Product::all();
    
    // Pass products to the view
    return view('admin.products', compact('products'));
    return view('products', compact('products'));
}
public function showInfoOnMain()
{
    // Fetch all products from the database
    $products = Product::all();
    
    // Pass products to the view
    return view('products', compact('products'));
}
public function destroy(Request $request)
{
    // Retrieve name and manufacturer from the request
    $name = $request->input('name');
    $manufacturer_name = $request->input('manufacturer_name');

    // Find the product by name and manufacturer name
    $product = Product::where('name', $name)
                       ->where('manufacturer_name', $manufacturer_name)
                       ->first();

    if (!$product) {
        return redirect()->route('adminPrdoucts')->withErrors(['Product not found']);
    }

    // Delete the product
    $product->delete();

    return redirect()->route('adminProducts')->with('success', 'Product deleted successfully');
}



}
