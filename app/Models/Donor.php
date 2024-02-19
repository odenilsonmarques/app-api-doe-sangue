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
        'age',
        'date_birth',
        'blood_type',
        'sex',
        'profession',
        'email',
        'address',
        'complement',
        'cep',
        'neighborhood',
        'phone_one',
        'phone_two'
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
