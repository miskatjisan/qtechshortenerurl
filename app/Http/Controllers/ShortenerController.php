<?php

namespace App\Http\Controllers;

use App\Models\Shortener;
use Illuminate\Http\Request;

class ShortenerController extends Controller
{
   

    public function shorten(Request $request)
        {
        $request->validate([
            'url' => 'required|url|max:255',
        ]);

        $longUrl = $request->input('url');

        //Here I make Generate a unique short URL

        $shortUrl = $this->generateShortUrl();

        //Here I make Save the URL 

        Shortener::create([
            'long_url' => $longUrl,
            'short_url' => $shortUrl,
        ]);

        return redirect()->route('home')->with('shortUrl', $shortUrl);
    }

    public function redirect($shortUrl)
    {
        $url = Shortener::where('short_url', $shortUrl)->firstOrFail();
        return redirect($url->long_url);
    }

    private function generateShortUrl()
    {
        //Here I make Generate a unique short URL

        return base_convert(rand(1000, 9999), 10, 36);
    }
}
