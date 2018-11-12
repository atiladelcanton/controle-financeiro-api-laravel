<?php

    namespace App\Http\Controllers\Api;


    use App\GroupDevs\Models\Category;
    use App\GroupDevs\Services\CategoryService;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\CreateCategory;
    use App\Http\Requests\UpdateCategory;
    use Log;

    class CategorieController extends Controller
    {

        private $categoryService;

        public function __construct(CategoryService $categoryService)
        {
            $this->categoryService = $categoryService;
        }

        /**
         * @api {get} /category Get all categories
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            try {
                return response()->json($this->categoryService->renderList(), 200);
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
         * @param CreateCategory $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(CreateCategory $request)
        {
            try {
                $retorno = $this->categoryService->buildInsert($request->all());
                return response()->json($retorno, 201);
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
         * @param $id
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function show($id)
        {
            try {
                $category = $this->categoryService->renderEdit($id);

                return response()->json($category, 200);
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
         * @param                $id
         * @param UpdateCategory $request
         *
         * @return \Illuminate\Http\JsonResponse
         */
        public function update($id, UpdateCategory $request)
        {
            try {
                $data = $request->all();
                $this->categoryService->buildUpdate($id,$data);

                $category = $this->categoryService->renderEdit($id);

                return response()->json($category, 200);
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
                $category->delete();

                return response()->json('Removido com sucesso', 200);
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
