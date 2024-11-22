<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogspot extends Model
{
    use HasFactory;
    protected $table = 'Blogposts';
    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $guarded = ['id'];
}
