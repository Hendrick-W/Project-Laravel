<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pesanan;
use App\Product;

class PesananController extends Controller
{
  public function index(Request $request){
      //Cari Pesanan
    $pesanan = Pesanan::select('id', 'nomor_order', 'qty', 'id_produk', 'total_harga', 'promo_diskon', 'ongkir')->get()->first();
    
      //Cari Produk
    $product = Product::find($pesanan->id_produk);
    // dd($product);
    return response()->json(
      [
        'status'=>'success',
        'data'=> $product,
				'nama_produk'=>$product->name
      ],
      200
    );
  }
 public function simpan(Request $request){
    //Eloquent
    $pesanan = new Pesanan;
    $pesanan->nomor_order = date('Ymhs');
    $pesanan->qty = $request->input('qty');
    $pesanan->id_produk = $request->input('id_produk');
    $pesanan->total_harga = $request->input('total_harga');
    $pesanan->promo_diskon = $request->input('promo_diskon');
    $pesanan->ongkir = $request->input('ongkir'); 
   if($pesanan->save()){
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
    $pesanan = Pesanna::find($id);
    if($pesanan->delete()){
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
    $pesanan = Pesanan::find($id);
   $pesanan->produk_id = $request->input('produk_id');
    $pesanan->qty = $request->input('qty');
   if($pesanan->save()){
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

