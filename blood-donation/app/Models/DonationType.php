<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationType extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    // Relations
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
