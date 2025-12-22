<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /* =========================
       SHOW ALL PRODUCTS
    ========================= */
    public function index()
    {
        $product = Product::latest()->get();
        return view('admin.product.index', compact('product'));
    }

    /* =========================
       SHOW CREATE FORM
    ========================= */
    public function create()
    {
        return view('admin.product.create');
    }

    /* =========================
       STORE PRODUCT
    ========================= */
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
            'capacity' => 'nullable|string',
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

    /* =========================
       SHOW EDIT FORM
    ========================= */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /* =========================
       UPDATE PRODUCT
    ========================= */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category' => 'required|string',
            'model'    => 'required|string|max:255',
            'voltage'  => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'warranty' => 'nullable|string|max:255',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048',
        ]);

        // Update image if new image uploaded
        if ($request->hasFile('image')) {

            // Delete old image
            if ($product->image && Storage::disk('public')->exists('product/'.$product->image)) {
                Storage::disk('public')->delete('product/'.$product->image);
            }

            $file = $request->file('image');
            $filename = time() . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('product', $filename, 'public');

            $product->image = $filename;
        }

        $product->update([
            'category' => $request->category,
            'model'    => $request->model,
            'voltage'  => $request->voltage,
            'capacity' => $request->capacity,
            'warranty' => $request->warranty,
        ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product updated successfully');
    }

    /* =========================
       DELETE PRODUCT
    ========================= */
    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists('product/'.$product->image)) {
            Storage::disk('public')->delete('product/'.$product->image);
        }

        $product->delete();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
