<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request){
      // $idProduk = $request->input('id');
      // $namaProduk = $request->input('nama_produk');
      // $hargaProduk = $request->input('harga_produk');
      
      // dd($request->all());
      return 'ini method get';
    }
    public function simpan(Request $request){
      // $idProduk = $request->input('id');
      // $namaProduk = $request->input('nama_produk');
      // $hargaProduk = $request->input('harga_produk');
      
      // $produk->save()
      return 'ini method post';
    }
    public function hapus(Request $request){
      // $produk->delete();
      return 'ini method del';
    }
    public function update(Request $request){
      $produk->update();
    }
}

