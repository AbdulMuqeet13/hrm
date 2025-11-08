<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Carbon\Carbon;

class Attendence extends Model
{
    use HasRoles;

    protected $fillable= [
        'checkin_time',
        'checkout_time',
        'date',
        'status',
        'staff_id',
    ];
     protected $table = 'attendences';

    public function staff(){
      return $this->belongsTo(Staff::class);
    }
    



}
