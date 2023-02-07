<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'specialitie_name',
        'user_id',
        'Phone',
        'city',
        'country', 
        'address', 
        'age',
        'gender',  
        'notes',  
    ];

    public function user()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function consultation()
    {
        return $this->hasOne(Doctor::class);
    }

    public function specialitie()
    {
        return $this->hasOne(Doctor::class);
    }
}

