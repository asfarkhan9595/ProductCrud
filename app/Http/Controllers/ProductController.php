<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        
        return view('products.index', compact('products'));
    }
    public function edit($id)
    {
       
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }
    public function create()
    {
       
        return view('products.create');
    }

    public function store(Request $request)
{
    
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $imageName = time() . '.' . $request->image->extension();
    // image to save in public path

    $request->image->move(public_path('productimg'), $imageName);

    $product = new Product;
        $product->image = $imageName;
        // 'title' => $request->get('title'),
        // 'description' => $request->get('description'),
        // 'price' => $request->get('price'),
        $product->image = $imageName;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->save();
    

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}

    public function update(Request $request, $id)
    {
       
        $product = Product::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product= Product::where('id',$id)->first();
        if(isset($request->image)) {
    
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('productimg'), $imageName);
            $product->image = $imageName;
        }
        $product->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);

      


        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        
        $product = Product::findOrFail($id);
        $product->delete();


        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
