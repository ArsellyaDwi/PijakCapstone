<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','series','author','price'];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }

    public function characters()
    {
        return $this->belongsToMany(Character::class, 'book_character');
    }
}
