<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photo;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request){
      $products = Product::select('id', 'name', 'stock', 'kategori', 'photo', 'description', 'kondisi_produk', 'harga')->get();
      return response()->json(
        [
          'status'=>'success',
          'data'=> $products
        ],
        200
      );
    }

    public function simpan(Request $request){
      //Eloquent
      $product = new Product;

      $product->name = $request->input('name');
      $product->stock = $request->input('stock');
      $product->kategori = $request->input('kategori');
      $product->photo = $request->input('photo');
      $product->description = $request->input('description');
      $product->kondisi_produk = $request->input('kondisi_produk'); 
      $product->harga = $request->input('harga');

      if($product->save()){
        $message = 'insert eloquent success';
      } else {
        $message = 'insert eloquent failed';
      }
      return response()->json(
        [
          'status'=>'success',
          'messages'=> $message
        ],
        200
      );
    }
    public function hapus($id){
      $product = Product::find($id);
      if($product->delete()){
        $message="delete success";
      } else {
        $message="delete failed";
      }
      return response()->json(
        [
          'status'=>'success',
          'messages'=> $message
        ],
        200
      );
    }
    public function update(Request $request, $id){
      //Eloquent
      $product = Product::find($id);

      $product->name = $request->input('name');
      $product->stock = $request->input('stock');

      if($product->save()){
        $message="update success";
      } else {
        $message="update failed";
      }
      return response()->json(
        [
          'status'=>'success',
          'messages'=> $message
        ],
        200
      );
    }
}

