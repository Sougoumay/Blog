<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responses extends Model
{
    use HasFactory;

    protected $fillable = ['answer','remark_id'];

    public function remarks()
    {
        return $this->belongsTo(Remark::class,'responses_id','id');
    }
}
