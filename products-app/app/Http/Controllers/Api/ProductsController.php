<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $products = Product::where('name', 'like', "%{$request->search}%")
                ->orWhere('description', 'like', "%{$request->search}%")
                ->paginate(10);
            $products->appends(['search' => $request->search]);
        } else {
            $products = Product::paginate(10);
        }
        return response()->json([
            'message' => 'success',
            'products' => $products,

        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product_data = $request->except('images');
        $image = $request->file('image')->store('products_photos');
        $product_data['image'] = $image;
        $product = Product::create($product_data);

        return response()->json([
            'message' => 'Product created successfully!',
            'product' => $product,

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'message' => 'success',
            'data' => $product,

        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product_data = $request->except('image');
        if ($request->hasFile('image'))
            $product_data['image'] = $request->file('image')->store('products_photos');
        $product->update($product_data);

        return response()->json([
            'message' => 'Product updated successfully!',
            'product' => $product,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully!',
        ]);
    }
}
