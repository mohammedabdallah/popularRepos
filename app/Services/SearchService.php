<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SearchService
{
    /**
     * @param $filters
     * @return \Illuminate\Http\Client\Response|string
     */
    public function getRepos($filters)
    {
        //build the string by appending the filters to the endpoint
        try {
            $url = config('app.search_endpoint') . '?q=';
            foreach ($filters as $filterName => $value) {
                if ($filterName == 'created') {
                    $url .= $filterName . ':>' . $value . '&';
                } else {
                    $url .= $filterName . '=' . $value . '&';
                }
                //we used substr to remove the last & which appended to end of the string
            }
            return Http::get(substr($url, 0, -1));
        } catch (\Throwable $exception) {
            return $exception->getMessage();
        }
    }
}
