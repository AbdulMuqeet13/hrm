<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        if(auth()->user()->hasRole('admin')){
      return view('dashboard.admin');
    }else if(auth()->user()->hasRole('hr')){
        return view('dashboard.hr');
    }else if(auth()->user()->hasRole('employee')){
        return view('dashboard.employee');
    }
  }
}
