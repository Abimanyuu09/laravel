<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('penjual');
        return view('dashboard.stock.index', [
            'products' => Product::all()
        ]);
    }

    public function shop()
    {
        return view('frontpage.shop-single', [
            'products' => Product::all()
        ]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'namabarang' => 'required|max:255|unique:products',
            'deskripsi' => 'required|max:255',
            'link' => 'required|max:255',
            'image' => 'required|file|max:1024',
            'stock' => 'required',
            'harga' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        // $validatedData['user_id'] = auth()->user()->id;

        product::create($validatedData);

        return redirect('/dashboard-stock')->with('success', 'New product has been added ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $dashboard_stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $dashboard_stock)
    {
        return view('dashboard.stock.edit', [

            'product' => $dashboard_stock
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $dashboard_stock)
    {
        $rules = [
            'deskripsi' => 'required|max:255',
            'stock' => 'required',
            'harga' => 'required',
            'link' => 'required|max:255'
        ];

        if ($request->namabarang != $dashboard_stock->namabarang) {

            $rules['namabarang'] = 'required|max:255|unique:products';

            $validatedData = $request->validate($rules);

            // $validatedData['user_id'] = auth()->user()->id;

            product::where('id', $dashboard_stock->id)
                ->update($validatedData);

            return redirect('/dashboard-stock')->with('success', 'product has been updated ');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $dashboard_stock)
    {
        $dashboard_stock->delete();
        return redirect('/dashboard-stock')->with('success', 'Product has been deleted ');
    }
}
