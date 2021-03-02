<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request){
      // $hargaProduk = $request->input('harga_produk');
      // dd($request->all());
      // return 'ini method get';
      // return response('Berhasil', 201);
      $dataUser = [
        [
          'nama'=>'Hendrick',
          'state' => 'Indonesia'
        ],
        [
          'nama'=>'Hendrick',
          'state' => 'Indonesia'
        ],
        [
          'nama'=>'Hendrick',
          'state' => 'Indonesia'
        ]
      ];
      return response()->json($dataUser);
    }
    public function simpan(Request $request){
      // $idProduk = $request->input('id');
      // $namaProduk = $request->input('nama_produk');
      // $hargaProduk = $request->input('harga_produk');
      
      // $produk->save()
      $validatedData = $request->validate([
        'name' => ['required']
      ]);
      if($request->input('name')){
        return response('ini sudah disimpan', 200);
      }
      return 'ini method post';
    }
    public function hapus($id, $tester){
      // $produk->delete();
      return $id.'ini method del'.$tester;
    }
    public function update(Request $request){
      $produk->update();
    }
}

