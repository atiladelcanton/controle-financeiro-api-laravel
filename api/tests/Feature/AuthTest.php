<?php

    namespace Tests\Feature;

    use App\GroupDevs\Models\User;
    use Tests\TestCase;

    class AuthTest extends TestCase
    {

        protected $dados;

        public function setUp()
        {
            parent::setUp();
            $this->dados = User::first()->select('email')->first()->toArray();
        }

        /**
         * A basic test example.
         *
         * @return void
         */
        public function testAuthUser()
        {

            $response = $this->json('POST', 'oauth/token', [
                'grant_type'    => 'password',
                'client_id'     => env('TOKEN_USER_ID'),
                'client_secret' => env('TOKEN_USER_CLIENT'),
                'username' => $this->dados['email'],
                'password' => 'ztascani1978',
                'scope' => '',
            ]);
            $response->assertStatus(200);

        }
    }
