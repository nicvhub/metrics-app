<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\OutOfTenLogger;

class GetAnxietyDataTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;

    public function testAnxietyRouteExists()
    {
        $this->get("/api/anxiety/")->assertStatus(200);
    }


    public function testAnxietyRouteReturnsData()
    {
        // given
        OutOfTenLogger::factory(10)->create();

        // when
        $response = $this->get("/api/anxiety/");
        $responseData = collect($response->json());

        // then
        $this->assertEquals(10,$responseData->count() );
        $this->assertArrayHasKey("id", $responseData[0]);
        $this->assertArrayHasKey("score", $responseData[0]);
        $this->assertArrayHasKey("created_at", $responseData[0]);
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
