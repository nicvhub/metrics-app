<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

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
        $this->get("/api/anxiety/")->assertExactJson(["greeting" => "hello"]);
    }
}
