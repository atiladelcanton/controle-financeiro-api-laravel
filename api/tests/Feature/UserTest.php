<?php

namespace Tests\Feature;

use App\GroupDevs\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    protected $dados;
    public function setUp()
    {
        parent::setUp();
        $this->dados = factory(User::class)->make()->toArray();
    }

    /**
     * @api {post} Create new User
     *
     */
    public function testCreateNewUser(){

        $retorno = $this->json('POST','/api/sign',$this->dados);

        $retorno->assertStatus(201);

    }
}
