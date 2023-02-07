<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
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
        return $this->belongsTo(Patient::class);
    }

    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    
}

