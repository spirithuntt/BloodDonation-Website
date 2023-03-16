<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
    ];
    //relations
    public function centers()
    {
        return $this->hasMany(Center::class);
    }
    
}
