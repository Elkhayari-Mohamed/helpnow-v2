<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'balance' => 1500,
    ]; 


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

