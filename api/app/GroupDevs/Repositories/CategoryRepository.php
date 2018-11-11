<?php
    /**
     * Created by PhpStorm.
     * User: atilarampazo
     * Date: 11/11/2018
     * Time: 11:41
     */

    namespace App\GroupDevs\Repositories;


    use App\GroupDevs\Models\Category;
    use App\Integrare\Repositories\EloquentRepository;


    class CategoryRepository extends EloquentRepository
    {

        public function __construct(Category $category)
        {
            parent::__construct($category);
        }
    }