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
        'blood_type',
        'user_id',
        'blood_center_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bloodCenter()
    {
        return $this->belongsTo(BloodCenter::class);
    }
}
