<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        'test_id',
        'donation_id',
        'passed',
        'result_number',
    ];
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
