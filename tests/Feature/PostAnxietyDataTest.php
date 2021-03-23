<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\OutOfTenLogger;
use function MongoDB\BSON\toJSON;

class PostAnxietyDataTest extends TestCase
{
    use WithoutMiddleware, RefreshDatabase;

    public function testAnxietyRoutePostsData()
    {
        // given
        $data = ["score" => 5];

        // when
        $response = $this->post("/api/anxiety/", $data);

        // then
        $response->assertOk();
    }
}

// out of 10
// date
// value out of 10

// hours spent
// date
// number of hours

// event (book read, meaningful conversation, excellent piece of work)
// date
// what it is
