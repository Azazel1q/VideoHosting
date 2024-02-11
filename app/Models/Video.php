<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'likes',
        'dislikes',
        'reviews',
        'file',
        'user_id',
        'coomment',
    ];

    public function reviews() :belongsToMany {
        return $this->belongsToMany();
    }

    public function users() :belongsToMany {
        return $this->belongsToMany();
    }
}
