<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // COntent description
        $content="Product";

        //Data fetch
        $products = Product::select('id', 'name', 'stock', 'kategori', 'photo', 'description', 'kondisi_produk', 'harga')->get();
        $data = [
            'content'=>$content,
            'data'=>$products
        ];
        return view ('app', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $product = new Product;

        $product->name = $request->input('name');
        $product->stock = $request->input('stok');
        $product->kategori = 'Test';
        $product->photo = 'photo';
        $product->description = 'Deskripsi';
        $product->kondisi_produk = 'Baru';
        $product->harga = $request->input('harga');
        $product->promo = 0;

        if($product->save()){
            return redirect()->route('product');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
