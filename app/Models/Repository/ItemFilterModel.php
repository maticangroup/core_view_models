<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 05/10/19
 * Time: 13:51
 */

namespace Matican\Models\Repository;


class ItemFilterModel
{
    private $filters;
    private $items;

    /**
     * @return mixed
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param mixed $filters
     */
    public function setFilters($filters): void
    {
        $this->filters = $filters;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
    }

}