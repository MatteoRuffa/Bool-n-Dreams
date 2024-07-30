<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Apartment;
use App\Models\Promotion;

class ApartmentPromotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartment_id',
        'promotion_id',
        'start_date',
        'end_date',
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
