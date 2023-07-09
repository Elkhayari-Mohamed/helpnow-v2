<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'consultation_id',
        'symptoms',
        'current_medications',
        'medical_history',
        'allergies',
        'family_medical_history',
        'lifestyle_information',
        'patient_id',

    ];

    // Assuming there is a one-to-one relationship between MedicalRecord and Consultation
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }
}
