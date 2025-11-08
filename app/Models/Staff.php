<?php

namespace App\Models;

use App\Models\Attendence;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
     use HasRoles;
       protected $fillable = [
        'department',
        'designation',
        'salary',
        'user_id',
    ];
     protected $table = 'staffs';

     public function user(){
        return $this->belongsTo(User::class);
 
     }
     public function attendence(){
      return $this->hasRole(Attendence::class);
     }
   }

   //  $table->id();
   //          $table->time('checkin_time');
   //          $table->time('checkout_time')->nullable();
   //          $table->date('date');
   //          $table->enum('status', ['present', 'absent', 'leave']);
   //          $table->foreignId('staff_id')->constrained()->onDelete('cascade');
   //          $table->timestamps();
