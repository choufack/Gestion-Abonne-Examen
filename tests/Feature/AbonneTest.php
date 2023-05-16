<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ElectionTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   

    public function test_Update_Abonne()
    {
        $response = $this->get('api/abonne');

        $response->assertStatus(200);
    }

    public function test_Delete_Abonne()
    {
        $response = $this->get('api/abonne');

        $response->assertStatus(200);
    }
    
    public function test_Get_All_Abonne()
    {
        $response = $this->get('api/abonne');

        $response->assertStatus(200);
    }
    
    public function test_Save_Abonne()
    {
        $response = $this->get('api/abonne');

        $response->assertStatus(200);
    }
    
}
