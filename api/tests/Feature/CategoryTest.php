<?php

    namespace Tests\Feature;

    use App\GroupDevs\Models\Category;
    use App\GroupDevs\Models\User;
    use Tests\TestCase;

    class CategoryTest extends TestCase
    {

        protected $dados;

        public function setUp()
        {
            parent::setUp();
            $this->dados = factory(Category::class)->make()->toArray();
        }

        /**
         * Return request headers needed to interact with the API.
         *
         * @return array array of headers.
         */
        protected function headers()
        {
            $headers = ['Accept' => 'application/json'];


            $response = $this->json('POST', 'oauth/token', [
                'grant_type'    => 'password',
                'client_id'     => env('TOKEN_USER_ID'),
                'client_secret' => env('TOKEN_USER_CLIENT'),
                'username'      => User::first()->email,
                'password'      => 'ztascani1978',
                'scope'         => '',
            ]);
            $resposta = (array)json_decode($response->content());

            $headers['Authorization'] = 'Bearer '.$resposta['access_token'];


            return $headers;
        }

        /**
         * @test
         *
         * Test: POST api/category.
         */
        public function it_get_all_category()
        {

            $response = $this->json('GET', 'api/category',[],$this->headers());

            $response->assertStatus(200);

            $response->assertJsonStructure([
                '*' => [
                    'id',
                    'type',
                    'name',
                    'active'
                ]
            ]);
        }


        /**
         * @test
         *
         * Test: GET api/category.
         */
        public function it_401s_when_not_authorized()
        {
            $response = $this->json('GET', 'api/category');

            $response->assertStatus(401);
        }
        /**
         * @test
         *
         * Test: POST api/category.
         */
        public function it_save_a_category(){
            $response = $this->json('POST','api/category',$this->dados,$this->headers());

            $response->assertStatus(201);
            $resposta = (array)json_decode($response->content());

            $this->assertArrayHasKey('type', $resposta);
            $this->assertArrayHasKey('name', $resposta);
            $this->assertArrayHasKey('active', $resposta);
        }

        /**
         * @test
         *
         * Test: GET api/category/:id.
         */
        public function it_show_category()
        {
            $category = Category::first();
            $response = $this->json('GET', 'api/category/'.$category->id, [],
                $this->headers());

            $response->assertStatus(200);
            $resposta = (array)json_decode($response->content());
            $this->assertArrayHasKey('type', $resposta);
            $this->assertArrayHasKey('name', $resposta);
            $this->assertArrayHasKey('active', $resposta);
        }

        /**
         * @test
         *
         * Test: PUT api/category/:id.
         */
        public function it_update_category()
        {
            $category = Category::first();
            $data = [
                'name' => $category->name.'-'.rand(10, 100),
                'type' => 1,
            ];
            $response = $this->json('PUT', 'api/category/'.$category->id, $data,
                $this->headers());

            $response->assertStatus(200);
        }

        /**
         * @test
         *
         * Test: DELETE api/category/:id.
         */
        public function it_delete_category()
        {
            $category = Category::first();
            $response = $this->delete('api/category/'.$category->id, [],
                $this->headers());
            $response->assertStatus(200);
            $this->assertEquals('"Removido com sucesso"', $response->content());
        }
    }
