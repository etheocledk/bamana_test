<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $existingProduct = Product::where('name', $request->name)->first();
        if ($existingProduct) {
            return redirect()->back()->with('error', 'Un produit avec ce nom existe déjà.');
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image_path' => $imagePath,  
        ]);

        return redirect()->back()->with('success', 'Produit ajouté avec succès.');
    }

    // public function edit($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('products.edit', compact('product'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'nullable|string',
    //         'price' => 'required|numeric',
    //         'quantity' => 'required|integer',
    //         'image_path' => 'nullable|string',
    //     ]);

    //     $product = Product::findOrFail($id);
    //     $product->update($request->all());

    //     return redirect()->route('products.index')->with('success', 'Produit mis à jour avec succès.');
    // }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Produit supprimé avec succès.');
    }
}
