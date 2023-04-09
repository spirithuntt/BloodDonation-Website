<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $casts = [
        'time' => 'datetime:H:i',
    ];
    protected $guarded = [];

    public function donation()
    {
        return $this->hasOne(Donation::class);
    }
    
    public function center()
    {
        return $this->belongsTo(Center::class);
    }
}




