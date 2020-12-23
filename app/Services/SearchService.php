<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SearchService
{
    public function getRepos($filters)
    {
        $url = config('app.search_endpoint').'?q=';
        foreach ($filters as $filterName => $value) {
            $url .= $filterName.'='.$value.'&';
        }
        //we used substr to remove the last & which appended to end of the string
        return Http::get(substr($url,0,-1));
    }
}
