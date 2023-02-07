<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patientlist extends Model
{
    protected $fillable = [
        'fullname',
        'email',
        'description',
        'prescription',
    ];
}
