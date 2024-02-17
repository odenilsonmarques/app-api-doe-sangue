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
        'donor_id',
        'blood_center_id'
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }

    public function blodCenter()
    {
        return $this->belongsTo(BloodCenter::class);
    }
}
