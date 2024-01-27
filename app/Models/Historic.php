<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'quantity',
        'bloodCenter',
        'donor_id'
    ];


    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
