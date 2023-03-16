<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'donation_id',
        // 'test_id',
        // 'result',
        'test_id',
        'passed',
    ];
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
