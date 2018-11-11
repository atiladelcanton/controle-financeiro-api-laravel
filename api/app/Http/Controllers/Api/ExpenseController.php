<?php

    namespace App\Http\Controllers\Api;

    use App\GroupDevs\Models\Expense;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class ExpenseController extends Controller
    {
        /**
         * @api {get} /expense Obtem all expense
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
         * @api {post} Create new expense
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
         * @api {get} expense/:id Obtem specific expense
         *
         * @param  \App\GroupDevs\Models\Expense $expense
         *
         * @return \Illuminate\Http\Response
         */
        public function show(Expense $expense)
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
         * @api {put} /expense/:id Update informations of specific expense
         *
         * @param  \Illuminate\Http\Request      $request
         * @param  \App\GroupDevs\Models\Expense $expense
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Expense $expense)
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
         * @api {delete} /expense/:id Remove the specified resource from storage.
         *
         * @param Expense $expense
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(Expense $expense)
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
