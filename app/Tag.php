<?php

namespace Foobooks;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function books() {
    return $this->belongsToMany(Book::class)->withTimestamps();
	}
}
