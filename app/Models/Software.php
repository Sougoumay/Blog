<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;

    protected $table = 'softwares';
    protected $fillable = [
        'title',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
