<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

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
}