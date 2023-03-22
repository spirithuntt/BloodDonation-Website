<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    use HasFactory;

    protected $fillable = [
        'center_name',
        'address',
        'phone',
        'city_id',
    ];
    //relations
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
