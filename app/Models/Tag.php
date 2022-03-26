<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

//    /**
//     * Interact with the user's first name.
//     *
//     * @param  string  $value
//     * @return \Illuminate\Database\Eloquent\Casts\Attribute
//     */
//    protected function slug(): Attribute
//    {
//        return Attribute::make(
//            set: fn (Tag $value) => "guerre",
//        );
//    }

//    public function setSlugAttribute()
//    {
//        $this->attributes['slug']=Str::slug($this->name);
//    }
//
//    public function getSlugAttribuate()
//    {
//        return Str::slug($this->name);
//    }
}
