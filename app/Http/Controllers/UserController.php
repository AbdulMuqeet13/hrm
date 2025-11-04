<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(Request $request){
    $users = User::get();
    return view('user.index',compact('users'));
   }

   public function create(Request $request){
    return view('user.create');
   }
   public function store(Request $request){
    $request->validate([
        "name" => "required",
        "email" => "required"
    ]);

    User::create([
        "name" => $request->name,
        "detail" => $request->email,
        'password' => 'password'

    ]);
    // dd($request->all());
    return redirect()->route('user.index');
   }
   public function edit(Request $request, $id){
      $users = User::find($id);
      return view('user.edit', compact('users'));
   }
    public function update(Request $request, $id){
    $request->validate([
        "name" => "required",
        "email" => "required"
    ]);

    $users = User::find($id);
    $users->update([
         "name" => $request->name,
         "email" => $request->email,
    ]);
    // dd($request->all());
    return redirect()->route('user.index');
   }

   public function destroy(Request $resquest, $id){
          User::find($id)->delete();
          return redirect()->route('user.index');
   }
}



