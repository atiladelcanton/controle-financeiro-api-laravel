<?php
    /**
     * Created by PhpStorm.
     * User: atilarampazo
     * Date: 11/11/2018
     * Time: 11:42
     */

    namespace App\GroupDevs\Services;


    use App\GroupDevs\Repositories\UserRepository;
    use App\Integrare\Contracts\ServiceContract;

    class UserService implements ServiceContract
    {
        private $userRepository;

        public function __construct(UserRepository $userRepository)
        {
            $this->userRepository = $userRepository;
        }

        /**
         * @return mixed
         */
        public function renderList()
        {
            return $this->userRepository->getAll();
        }

        /**
         * @param $id
         *
         * @return mixed
         */
        public function renderEdit($id)
        {
            return $this->userRepository->getById($id);
        }

        /**
         * @param $id
         * @param $data
         *
         * @return mixed
         */
        public function buildUpdate($id, $data)
        {
            return $this->userRepository->update($id, $data);
        }

        /**
         * @param $data
         *
         * @return mixed
         */
        public function buildInsert($data)
        {
            $data = $this->mapUserPassword($data);

            return $this->userRepository->create($data);
        }

        /**
         * @param $data
         *
         * @return mixed
         */
        private function mapUserPassword($data)
        {
            if (empty($data['password'])) {
                unset($data['password'], $data['password_confirmation']);
            } else {
                $data['password'] = bcrypt($data['password']);
            }

            return $data;
        }

        /**
         * @param $id
         *
         * @return mixed
         */
        public function buildDelete($id)
        {
            return $this->userRepository->delete($id);
        }
    }