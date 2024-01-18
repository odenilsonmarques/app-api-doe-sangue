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
        'Photograph'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
