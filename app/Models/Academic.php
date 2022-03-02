<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'institute',
        'user_id',
        'country',
        'city'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
