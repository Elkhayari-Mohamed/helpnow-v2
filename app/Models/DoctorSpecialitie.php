<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSpecialitie extends Model
{
    protected $table = 'doctor_specialitie';

    protected $fillable = [

        'specialitie_id',
        'doctor_id',
    ];
}
