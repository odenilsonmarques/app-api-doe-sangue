<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'uuid',
        'name',
        'cpf',
        'phone',
        'date_birth',
        'age',
        'sex',
        'address',
        'profession',
        'bllod_type',
        'location',
        'Photograph',
        'user_id',
    ];

   

    public function historics()
    {
        return $this->hasMany(Historic::class);
    }
}
