<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Quiz;

class QuizController extends Controller
{
    //
    public function index(Request $request){
        
        //Cari Pesanan
        $quiz = Quiz::select('id', 'Soal')->get();
    //   $pesanan = Pesanan::select('id', 'nomor_order', 'qty', 'id_produk', 'total_harga', 'promo_diskon', 'ongkir')->get()->first();
      
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

      $quiz = new Quiz;
      $quiz->Soal = $request->input('Soal');
      $quiz->A = $request->input('A');
      $quiz->B = $request->input('B');
      $quiz->kunci_jawaban = $request->input('kunci_jawaban');
      $quiz->poin = $request->input('poin'); 
     if($quiz->save()){
        $message = 'insert quiz success';
      } else {
        $message = 'insert quiz failed';
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
        $quiz = Quiz::find($id);
    //   $pesanan = Pesanan::find($id);
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
