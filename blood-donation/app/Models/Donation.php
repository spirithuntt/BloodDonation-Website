<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        'center_id', 'donation_type_id', 'blood_type_id', 'is_donated',
    ];
    public function donation_type()
    {
        return $this->belongsTo(DonationType::class);
    }
    public function blood_type()
    {
        return $this->belongsTo(BloodType::class);
    }
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
