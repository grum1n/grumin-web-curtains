<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_desc',
        'section_heading',
        'body',
        'article_heading',
        'article_body',
        'author',
        'cover',
        'user'
    ];
}
