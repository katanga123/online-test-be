<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SubjectControllerTest extends TestCase
{
    /** @test */
    public function store_subject_data()
    {
        // $response = factory(\App\Subject::class)->make();

        $response = $this->postJson('/api/subject',[
            'user_id' => 1,
            'subject' => 'Sample Subject'
        ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true
            ]);
    }
}
