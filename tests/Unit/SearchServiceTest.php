<?php

namespace Tests\Unit;

use App\Services\SearchService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SearchServiceTest extends TestCase
{
    use RefreshDatabase;

    private $searchService;

    protected function setUp(): void
    {
        $this->searchService = app()->make(SearchService::class);
        parent::setUp();
    }

    public function testItReturnTheSameNumberOfPerPageFilter()
    {
        $repos = $this->searchService->getRepos(
            ['created' => '2019-10-01', 'sort' => 'stars', 'per_page' => 10],
            'https://api.github.com/search/repositories?q='
        );
        $this->assertCount(10, $repos);
    }
}
