<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(Request $request){
      // $hargaProduk = $request->input('harga_produk');
      // dd($request->all());
      // return 'ini method get';
      // return response('Berhasil', 201);
      $photos = DB::table('photos')->get();
      return response()->json(
        [
          'status'=>'success',
          'data'=> $photos
        ],
        200
      );
    }
    public function simpan(Request $request){
      $inserted = DB::table('photos')->insert([
        'name' => $request->input('name'),
        'title' => $request->input('title')
      ]);
      if($inserted){
        $message = 'insert success';
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
      // $produk->delete();
      DB::table('photos')->where('id', '>', $id)->delete();
    }
    public function update(Request $request, $id){
      $affected = DB::table('photos')
        ->where('id', $id)
        ->update(
          [
            'name' => $request->input('name'),
            'title' => $request->input('title')
          ]
        );
      if($affected){
        $message="update success";
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

