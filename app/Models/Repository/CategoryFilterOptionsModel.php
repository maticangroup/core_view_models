<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 12/11/19
 * Time: 17:50
 */

namespace Matican\Models\Repository;


class CategoryFilterOptionsModel
{
    private $categoryID;
    private $options;

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID): void
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return mixed
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param mixed $options
     */
    public function setOptions($options): void
    {
        $this->options = $options;
    }
}