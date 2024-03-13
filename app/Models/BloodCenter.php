<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodCenter extends Model
{
    use HasFactory;

    protected $fillable = [

        'uuid',
        'name',
        'location',
        'opening_hours',
        'email',
        'phone',
        'blood_supply',
        'city'
    ];

    public function schedulings()
    {
        return $this->hasMany(Scheduling::class);
    }

    public function historics()
    {
        return $this->hasMany(Historic::class);
    }

}
