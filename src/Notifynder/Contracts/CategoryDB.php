<?php

namespace Fenos\Notifynder\Contracts;

/**
 * Class CategoryRepository.
 *
 * Repository reponsable to approach database
 * queries of the categories
 */
interface CategoryDB
{
    /**
     * Find By Id.
     *
     * @param $id
     * @return mixed
     */
    public function find($categoryId);

    /**
     * Find by name.
     *
     * @param $name
     * @return mixed
     */
    public function findByName($name);

    /**
     * Find by names returnig
     * lists of ids.
     *
     * @param $name
     * @return mixed
     */
    public function findByNames(array $name);

    /**
     * Add a category to the DB.
     *
     * @param  array  $name
     * @param         $text
     * @return static
     */
    public function add($name, $text);

    /**
     * Delete category by ID.
     *
     * @param $id
     * @return mixed
     */
    public function delete($categoryId);

    /**
     * Delete category by name.
     *
     * @param $name
     * @return mixed
     */
    public function deleteByName($name);

    /**
     * Update a category by id.
     *
     * @param  array $data
     * @param        $categoryId
     * @return mixed
     */
    public function update(array $data, $categoryId);
}
