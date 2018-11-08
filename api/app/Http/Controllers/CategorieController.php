<?php

    namespace App\Http\Controllers;

    use App\Categorie;
    use App\GroupDevs\Models\Category;
    use Illuminate\Http\Request;
    use Log;

    class CategorieController extends Controller
    {
        /**
         * @api {get} /category Get all categories
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            try {
                return response()->json('', 200);
            } catch (\Exception $e) {
                Log::error(
                    $e->getMessage(),
                    [
                        'linha'   => $e->getLine(),
                        'arquivo' => $e->getFile(),
                    ]
                );

                return response()->json([$e->getMessage()],
                    $e->getCode());
            }
        }


        /**
         * @api {post} Create new category
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            try {
                return response()->json('', 201);
            } catch (\Exception $e) {
                Log::error(
                    $e->getMessage(),
                    [
                        'linha'   => $e->getLine(),
                        'arquivo' => $e->getFile(),
                    ]
                );

                return response()->json([$e->getMessage()],
                    $e->getCode());
            }
        }

        /**
         * @api {get} category/:id  Get specific category
         *
         * @param Category $category
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function show(Category $category)
        {
            try {
                return response()->json('', 200);
            } catch (\Exception $e) {
                Log::error(
                    $e->getMessage(),
                    [
                        'linha'   => $e->getLine(),
                        'arquivo' => $e->getFile(),
                    ]
                );

                return response()->json([$e->getMessage()],
                    $e->getCode());
            }
        }


        /**
         * @api {put} /category/:id Update informations of specific category
         *
         * @param  \Illuminate\Http\Request $request
         * @param Category                  $category
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function update(Request $request, Category $category)
        {
            try {
                return response()->json('', 200);
            } catch (\Exception $e) {
                Log::error(
                    $e->getMessage(),
                    [
                        'linha'   => $e->getLine(),
                        'arquivo' => $e->getFile(),
                    ]
                );

                return response()->json([$e->getMessage()],
                    $e->getCode());
            }
        }

        /**
         * @api {delete} /category/:id Remove the specified category.
         *
         * @param Category $category
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function destroy(Category $category)
        {
            try {
                return response()->json('', 200);
            } catch (\Exception $e) {
                Log::error(
                    $e->getMessage(),
                    [
                        'linha'   => $e->getLine(),
                        'arquivo' => $e->getFile(),
                    ]
                );

                return response()->json([$e->getMessage()],
                    $e->getCode());
            }
        }
    }
