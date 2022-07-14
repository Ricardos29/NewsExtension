<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Post extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $fillable = [
        'title',
        'body'
    ];

    public $timestamps = true;

    // Relation with tags
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    // Relation with categories
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
