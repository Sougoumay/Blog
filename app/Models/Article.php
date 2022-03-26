<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'tags',
        'status',
        'slug'
    ];

    public function remarks()
    {
        return $this->hasMany(Remark::class,'article_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
