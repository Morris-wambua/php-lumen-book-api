<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    protected $table ='books';
    
    protected $fillable = [
        'name', 'authors', 'book_count'
    ];

    protected $hidden = [];
}