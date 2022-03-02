<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'remark',
        'status'
    ];

    public function articles()
    {
        return $this->belongsTo(Article::class,'remark_id','id');
    }
}
