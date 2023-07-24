<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $fillable = [
        'consultation_id',
        'doctor_name',
        'patient_name',
        'doctor_specialite',
        'doctor_adresse',
        'doctor_phone',
        'doctor_email',
        'prescription',
        'medication_name',
        'dosage',
        'frequency',
        'duration',
        'instructions',

    ];


    use HasFactory;

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {

        return $this->belongsTo(Doctor::class);
    }
    public function medical_record()
    {
        return $this->hasOne(MedicalRecord::class);
    }
}
