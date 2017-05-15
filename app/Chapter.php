<?php

namespace Foobooks;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
        'name', 'content','book_id'
    ];

    public function book()
	{
	    # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
	    return $this->belongsTo(Book::class);
	}
}
