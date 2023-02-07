<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialitie extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
