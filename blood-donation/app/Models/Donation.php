<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $fillable = [
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
    public function donation_type()
    {
        return $this->belongsTo(DonationType::class);
    }
    public function blood_type()
    {
        return $this->belongsTo(BloodType::class);
    }

}
