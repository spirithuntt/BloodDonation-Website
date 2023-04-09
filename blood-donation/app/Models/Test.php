<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_name',
        'criteria',
        'donation_type_id',
        'result_type',

    ];

    public function donation_type()
    {
        return $this->belongsTo(DonationType::class);
    }

    public function result()
    {
        return $this->hasOne(Result::class);
    }
}
