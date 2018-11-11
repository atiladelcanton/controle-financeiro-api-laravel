<?php

    namespace App\Http\Controllers\Api;


    use App\GroupDevs\Models\Entry;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Log;

    class EntryController extends Controller
    {
        /**
         * @api {get} /expense Get all extries
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
         * @api {post} Create new entry
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
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
         * @api {get} entry/:id  Get specific entry
         *
         * @param Entry $entry
         *
         * @return \Illuminate\Http\Response
         */
        public function show(Entry $entry)
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
         * @api {put} /entry/:id Update information of specific entry
         *
         * @param  \Illuminate\Http\Request $request
         * @param Entry                     $entry
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Entry $entry)
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
         * @api {delete} /entry/:id Remove the specified entry.
         *
         * @param Entry $entry
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(Entry $entry)
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
