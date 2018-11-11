<?php
    /**
     * Created by PhpStorm.
     * User: atilarampazo
     * Date: 11/11/2018
     * Time: 11:40
     */

    namespace App\Http\Controllers\Api;


    use App\GroupDevs\Services\UserService;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreUser;

    class UserController extends Controller
    {
        private $userService;

        public function __construct(UserService $userService)
        {
            $this->userService = $userService;
        }

        /**
         * @api {post} Create new User
         *
         * @param StoreUser $storeUser
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function sign(StoreUser $storeUser)
        {
            try {

                $user = $this->userService->buildInsert($storeUser->all());

                return response()->json($user, 201);

            } catch (\Exception $exception) {
                \Log::error($exception->getFile()."\n".$exception->getLine()
                    ."\n".$exception->getMessage());

                return response()->json(['Ocorreu um erro interno'], 500);
            }
        }

        /* public function show($id)
         {
             return response()->json(User::find($id), 200);
         }

         public function update(UpdateUser $storeUser, $id)
         {
             try {

                 $user = $this->userService->buildUpdate($id, $storeUser->all());

                 return response()->json($user, 200);

             } catch (\Exception $exception) {
                 \Log::error($exception->getFile()."\n".$exception->getLine()
                     ."\n".$exception->getMessage());

                 return response()->json(['Ocorreu um erro interno'], 500);
             }
         }

         public function destroy($id)
         {
             try {

                 $this->userService->buildDelete($id);

                 return response()->json("Removido com sucesso", 200);

             } catch (\Exception $exception) {
                 \Log::error($exception->getFile()."\n".$exception->getLine()
                     ."\n".$exception->getMessage());

                 return response()->json(['Ocorreu um erro interno'], 500);
             }
         }*/
    }