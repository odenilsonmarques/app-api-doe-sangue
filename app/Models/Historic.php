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
        'quantity',
        'donor_id'
    ];

    public function doador()
    {
        return $this->belongsTo(Donor::class);
    }
}
