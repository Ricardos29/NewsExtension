<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class Category extends Model
{
    use HasFactory, SoftDeletes, Uuids;

    protected $fillable = [
        'title'
    ];

    public $timestamps = true;

    // Relation with posts
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }
}
