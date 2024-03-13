<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'donation_date',
        'quantity_blood',
        'user_id',
        'blood_center_id',
        'scheduling_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scheduling()
    {
        return $this->belongsTo(Scheduling::class);
    }

    public function bloodCenter()
    {
        return $this->belongsTo(BloodCenter::class);
    }


   
}
