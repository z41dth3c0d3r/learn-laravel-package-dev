<?php

namespace Zaid\Inspire\App;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt()
    {
        $response = Http::get("https://inspiration.goprogram.ai/");

        return $response['quote'] . " - " . $response['author'];
    }
}