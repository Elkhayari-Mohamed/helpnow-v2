<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StripeInfo extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'stripe_id', 'card_last_four', 'card_brand', 'date_exp'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
