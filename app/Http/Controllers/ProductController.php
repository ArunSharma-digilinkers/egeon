<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename = NULL;
        $path = NULL;

        if($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . rand(0, 9999) . '.' . $extension;
            $path = $file->storeAs('product', $filename, 'public');
        }

        $request->validate([
            'category' =>'required|string',
            'model' => 'required|string',
            'voltage' => 'nullable|string',
            'capacity' => 'nullable|string|max:255',
            'warranty' =>'nullable|string',
            'image' => 'required|image|file|mimes:jpg,jpeg,png,gif,svg|max:2048',

        ]);


        $product = Product::create([
            'category' => $request->category,
            'model' => $request->model,
            'voltage' =>$request->voltage,
            'capacity' =>$request->capacity,
            'warranty' =>$request->warranty,
            'image'    => $filename,
        ]);

        return redirect('/admin/product/')->with('message', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/product/');
    }
}