<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UsersdetailController extends Controller
{
   public function index(Request $request){
    $users = Product::get();
    return view('userdetail.index',compact('users'));
   }

   public function create(Request $request){
    return view('userdetail.create');
   }
   public function store(Request $request){
    $request->validate([
        "name" => "required",
        "detail" => "required"
    ]);

    Product::create([
        "name" => $request->name,
        "detail" => $request->detail,

    ]);
    // dd($request->all());
    return redirect()->route('userdetail.index');
   }
   public function edit(Request $request, $id){
      $users = Product::find($id);
      return view('userdetail.edit', compact('users'));
   }
    public function update(Request $request, $id){
    $request->validate([
        "name" => "required",
        "detail" => "required"
    ]);

    $users = Product::find($id);
    $users->update([
         "name" => $request->name,
         "detail" => $request->detail,
    ]);
    // dd($request->all());
    return redirect()->route('userdetail.index');
   }

   public function destroy(Request $resquest, $id){
          Product::find($id)->delete();
          return redirect()->route('userdetail.index');
   }
}
