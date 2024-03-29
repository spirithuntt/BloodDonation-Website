<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $casts = [
        'time' => 'datetime:H:i',
    ];

    protected $fillable = [
        'user_id', 'center_id', 'donation_type_id', 'blood_type_id', 'is_donated', 'date',
    ];

    protected $guarded = [];

    protected $attributes = [
        'date' => null,
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

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
