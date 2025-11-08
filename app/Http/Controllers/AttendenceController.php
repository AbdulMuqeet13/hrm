<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Staff;
use App\Models\Attendence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendenceController extends Controller
{

    public function index(Request $request){
         
          
        $attendences = Attendence::all();
        $attendence = Attendence::where('staff_id', auth()->user()->staff->id) ->whereDate('date', Carbon::today())->first();
        
    
    return view('attendence.index',compact('attendences', 'attendence'));
   }

   public function checkin(Request $request){
   

    $attendence = Attendence::create([
        "checkin_time" => Carbon::now()->format('H:i:s'),
        "date" => Carbon::now(),
        "status" => 'present',
        "staff_id" => auth()->user()->staff->id,
    ]);
    return redirect()->route('attendence.index');
}
  

    public function checkout(Request $request){
       $attendence = Attendence::where('staff_id', 1)
                            ->whereNull('checkout_time')
                            ->first(); 

   
        
        $attendence->checkout_time = Carbon::now()->format('H:i:s');
         $attendence->save();

       return redirect()->route('attendence.index');
    }
}

