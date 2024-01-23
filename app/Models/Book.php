<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query->where('title', 'LIKE','%' . $title . '%');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
