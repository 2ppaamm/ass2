<?php

namespace Foobooks;

use Illuminate\Database\Eloquent\Model;
use Foobooks\User;

class Book extends Model
{
    protected $fillable = [
        'title', 'synopsis', 'cover','user_id'
    ];

    public function chapters(){
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->hasMany(Chapter::class);
    }

    public function author() {
        # Book belongs to Author
        # Define an inverse one-to-many relationship.
        return $this->belongsTo(User::class,'user_id');
    }

    public function tags()
    {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}

