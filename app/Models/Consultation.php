<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'descriptions',
        'price',
        'link',
        'consultation_date',
        'status', 
        'payed', 
          
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor(){

        return $this->belongsTo(Doctor::class);
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
    public function ordonnances()
    {
        return $this->hasMany(Ordonnance::class);
    }
    public function medical_record()
{
    return $this->hasOne(MedicalRecord::class);
}

}
