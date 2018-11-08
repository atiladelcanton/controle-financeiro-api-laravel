<?php
/**
 * Created by PhpStorm.
 * User: elton
 * Date: 30/08/18
 * Time: 20:43
 */

namespace App\Integrare\Contracts;


interface ServiceContract
{
    /**
     * @return mixed
     */
    public function renderList();

    /**
     * @param $id
     * @return mixed
     */
    public function renderEdit($id);

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function buildUpdate($id, $data);

    /**
     * @param $data
     * @return mixed
     */
    public function buildInsert($data);

    /**
     * @param $id
     * @return mixed
     */
    public function buildDelete($id);


}