<?php
    /**
     * Created by PhpStorm.
     * User: atilarampazo
     * Date: 11/11/2018
     * Time: 11:42
     */

    namespace App\GroupDevs\Services;


    use App\GroupDevs\Repositories\CategoryRepository;
    use App\Integrare\Contracts\ServiceContract;

    class CategoryService implements ServiceContract
    {
        private $categoryRepository;

        public function __construct(CategoryRepository $categoryRepository)
        {
            $this->categoryRepository = $categoryRepository;
        }

        /**
         * @return mixed
         */
        public function renderList()
        {
            return $this->categoryRepository->getAll();
        }

        /**
         * @param $id
         *
         * @return mixed
         */
        public function renderEdit($id)
        {
            return $this->categoryRepository->getById($id);
        }

        /**
         * @param $id
         * @param $data
         *
         * @return mixed
         */
        public function buildUpdate($id, $data)
        {
            return $this->categoryRepository->update($id, $data);
        }

        /**
         * @param $data
         *
         * @return mixed
         */
        public function buildInsert($data)
        {
            return $this->categoryRepository->create($data);
        }


        /**
         * @param $id
         *
         * @return mixed
         */
        public function buildDelete($id)
        {
            return $this->categoryRepository->delete($id);
        }
    }