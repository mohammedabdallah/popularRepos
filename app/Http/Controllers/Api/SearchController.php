<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SearchService;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //Constructor property promotion which introduced in php 8
    public function __construct(private SearchService $searchService)
    {
    }

    public function search(Request $request)
    {
        return $this->searchService->getRepos($request->all());
    }
}
