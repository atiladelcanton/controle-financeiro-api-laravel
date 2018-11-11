<?php
    /**
     * Created by PhpStorm.
     * User: atilarampazo
     * Date: 11/11/2018
     * Time: 11:41
     */

    namespace App\GroupDevs\Repositories;


    use App\GroupDevs\Models\User;
    use App\Integrare\Repositories\EloquentRepository;


    class UserRepository extends EloquentRepository
    {

        public function __construct(User $user)
        {
            parent::__construct($user);
        }
    }