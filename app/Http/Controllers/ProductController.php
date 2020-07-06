<?php

namespace App\Http\Controllers;

use Spatie\QueryBuilder\QueryBuilder;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = QueryBuilder::for(Product::class)
            ->allowedSorts('id')
            ->allowedIncludes('images','category')
            ->get();

        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string',
            'slug' => 'required|string',
            'description' => 'required|string',
            'images' => 'required'
        ]);
                
        $product = Product::create(array_slice($data, 0, 4))->images()->attach($data['images']);
        
        return response($product, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = QueryBuilder::for(Product::class)
            ->allowedIncludes(['images'])
            ->where('slug', $slug)
            ->get();

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'category_id' => 'required',
            'name' => 'required|string',
            'description' => 'required|string',
            'images' => 'required'
        ]);
                
        $product->update(array_slice($data, 0, 3));
        $product->images()->sync($data['images']);
        
        return response($product, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json('Deleted product.', 200);
    }
}
