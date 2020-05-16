<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testResponseAndCorrectView()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertViewIs('index');


    }

    public function testAvatarsReturned()
    {
        $response = $this->get('/');

        $data = $response->getOriginalContent()->getData();

        $this->assertCount(12, $data['files'], 'Count not match');

        for ($i=0; $i<count($data['files']); $i++)
            $this->assertRegExp('/\/img\/avatars\/.+\.jpg/', $data['files'][$i]);

    }
}
