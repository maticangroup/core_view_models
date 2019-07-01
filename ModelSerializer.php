<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 01/07/19
 * Time: 16:53
 */

namespace App\FormModels;


class ModelSerializer
{
    /**
     * @param $json
     * @param $class
     * @return mixed
     */
    public static function parse($json, $class)
    {
        $properties = (array)json_decode(json_encode($json));
        if (class_exists($class)) {
            $classInstance = new $class();
            foreach ($properties as $property => $value) {
                $setterName = "set" . $property;
                if (method_exists($classInstance, $setterName)) {
                    $classInstance->{$setterName}($value);
                }
            }
            return $classInstance;
        }
    }
}