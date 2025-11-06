<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class StaffController extends Controller
{
    public function index(Request $request){
        $staffs = Staff::get();
        // dd('sds');
        return view("staff.index", compact('staffs'));
    }
     public function create(Request $request){
        $roles = Role::all();
    return view('staff.create', compact('roles'));
   }
   public function store(Request $request,$id){
    $request->validate([
        "department" => "required",
        "designation" => "required",
        "salary" => "required",
        "role"=>"required"
    ]);
    
    // Get the selected role name from the form
        $roleName = $request->input('role');

        // Find the role object by its name
        $role = Role::findByName($roleName);

        // Assign the role to the staff member
        $id->assignRole($role);

    Staff::create([
        "department" => $request->department,
        "designation" => $request->designation,
        'salary' => $request->salary,
        
    ]);
    return redirect()->route('staff.index');
}

    public function edit(Request $request, $id){
        $staffs = Staff::find($id);
        return view('staff.edit', compact('staffs'));
    }
     public function update(Request $request, $id){
      $request->validate([
        "department" => "required",
        "designation" => "required",
        "salary" => "required",
    ]);
      $staffs = Staff::find($id);
      $staffs->update([
        "department" => $request->department,
        "designation" => $request->designation,
        'salary' => $request->salary,

      ]);
    return redirect()->route('staff.index');
}
    public function destroy(Request $request, $id){
     Staff::find($id)->delete();
     return redirect()->route('staff.index');
    
}
}
