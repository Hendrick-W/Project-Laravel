<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Photo;

class ProductController extends Controller
{
    //
    public function index(Request $request){
      $photos = Photo::select('name', 'title')->get();
      return response()->json(
        [
          'status'=>'success',
          'data'=> $photos
        ],
        200
      );
    }

    public function simpan(Request $request){


      //Eloquent
      $photo = new Photo;

      $photo->name = $request->input('name');
      $photo->title = $request->input('title');

      if($photo->save()){
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
      $photo = Photo::find($id);
      if($photo->delete()){
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
      $photo = Photo::find($id);

      $photo->name = $request->input('name');
      $photo->title = $request->input('title');

      if($photo->save()){
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

