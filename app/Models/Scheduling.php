<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduling extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'scheduling_date',
        'phone',
        'blood_type'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blodCenter()
    {
        return $this->belongsTo(BloodCenter::class);
    }
}
