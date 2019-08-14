<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 13/08/19
 * Time: 10:31
 */

namespace Matican;


use Symfony\Component\Filesystem\Filesystem;

class ConvertToJavascript
{

    /**
     * @param $serverName
     * @return bool
     * @throws \ReflectionException
     */
    public static function convert($serverName)
    {
        $jsModelsDirectory = $_SERVER['PWD'] . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'JsModels' . DIRECTORY_SEPARATOR;
        $fileSystem = new Filesystem();

        $jsServerModelsDirectory = $jsModelsDirectory . $serverName;


        $serverModels = self::getServerModels($serverName);
        foreach ($serverModels as $serverModel) {
            $fileContent = "";
            $className = "\Matican\Models\\$serverName\\$serverModel";
            $properties = self::getModelProperties($className);
            $fileContent .= "class $serverModel{";

            $modelPath = $jsServerModelsDirectory . DIRECTORY_SEPARATOR . $serverModel . '.js';

            if (!$fileSystem->exists($modelPath)) {
                $fileSystem->mkdir($jsServerModelsDirectory);
                $fileSystem->touch($modelPath);
            } else {
                $fileSystem->remove($modelPath);
                $fileSystem->touch($modelPath);
            }

            foreach ($properties as $property) {
                $fileContent .= self::generateGetter($property->name);
                $fileContent .= self::generateSetter($property->name);
            }

            $fileContent .= "}";
            $fileSystem->appendToFile($modelPath, $fileContent);
        }
        return true;
    }

    /**
     * @param $modelClassName
     * @return \ReflectionProperty[]
     * @throws \ReflectionException
     */
    private static function getModelProperties($modelClassName)
    {
        $reflect = new \ReflectionClass($modelClassName);
        $properties = $reflect->getProperties();
        return $properties;
    }


    private static function generateGetter($propertyName)
    {
        $stream = "get";
        $stream .= ucfirst($propertyName);
        $stream .= "(){";
        $stream .= "return this." . lcfirst($propertyName) . ";";
        $stream .= "}";
        return $stream;
    }

    private static function generateSetter($propertyName)
    {
        $stream = "set";
        $stream .= ucfirst($propertyName);
        $stream .= "($" . lcfirst($propertyName) . "){";
        $stream .= "this." . lcfirst($propertyName) . "=$" . lcfirst($propertyName) . ";";
        $stream .= "}";
        return $stream;
    }

    private static function getServerModels($serverName)
    {
        $modelsDirPath = $_SERVER['PWD'] .
            DIRECTORY_SEPARATOR . 'app' .
            DIRECTORY_SEPARATOR . 'Models' .
            DIRECTORY_SEPARATOR . $serverName .
            DIRECTORY_SEPARATOR;
        $dirArray = scandir($modelsDirPath);
        if ($dirArray) {
            unset($dirArray[0]);
            unset($dirArray[1]);
        }
        foreach ($dirArray as $key => $item) {
            $dirArray[$key] = str_replace(
                '.php', '', $item
            );
        }
        return $dirArray;
    }
}