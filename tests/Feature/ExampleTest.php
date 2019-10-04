<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->post('/signin',[
            'first_name' => 'manu',
            'last_name' => 'joseph',
            'email' => 'manujoseph505@gmail.com',
            'confirm_password' => '17091993',
            'password' => '17091993',
        ]);
        $response->assertRedirect('/');
    }

    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertOk();
    }

    public function testRegisterUser()
    {
        $response = $this->get('/register');
        $response->assertOk();
    }
    public function testRegisterAction()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('register',[
            'name' => "Anu Joy",
            'email' => "anu@gmail.com",
            'password' => "17091993",
            'password_confirmation' => "17091993"
        ]);
        //$response->assertOk();
        $response->assertRedirect('/home');
    }


    public function testHomeTest()
    {
        $this->actingAs(factory(User::class)->create());
        $response = $this->get('/home');
        $response->assertOk();
    }
}

