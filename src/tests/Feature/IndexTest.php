<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// use Database\Factories\BigQuestion;
use App\BigQuestion;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $new_record = factory(BigQuestion::class)->create();
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee("東京の難読地名クイズ");

        $response->assertSee($new_record->name);
    }
}
