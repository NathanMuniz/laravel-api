<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactoy;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $fillable = ['name', 'author', 'publish_date'];

}
