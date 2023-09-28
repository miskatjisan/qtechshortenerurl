<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shortener extends Model
{
    use HasFactory;

    protected $fillable = ['long_url', 'short_url'];

    // Here I Adding  a scope to retrieve a URL by its short URL

    
    public function scopeFindByShortUrl($query, $shortUrl)
    {
        return $query->where('short_url', $shortUrl);
    }
}
