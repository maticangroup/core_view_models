<?php
/**
 * Created by PhpStorm.
 * User: hossein
 * Date: 23/07/19
 * Time: 15:37
 */

namespace Matican\Permissions;


use Symfony\Component\Filesystem\Filesystem;

class Actions
{
    public static function generate_class_actions($server, $entity, $controller)
    {
        $methods = get_class_methods($controller);
        $fileSystem = new Filesystem();
        $constFile = self::get('TEMP_FILE');
        foreach ($methods as $method) {
            $permissionName = strtolower($server . '_' . $entity . '_' . str_replace('Controller', '', $method));
            $permissionConst = "const $permissionName = '$permissionName';";
            $fileSystem->appendToFile($constFile, $permissionConst);
        }
//        dd($constFile);
    }

    public static function get($param)
    {
        if ($param == 'TEMP_FILE') {
            $public = DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;
            $serverRoot = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR;
            $cacheDir = 'src' . DIRECTORY_SEPARATOR . 'Permissions' . DIRECTORY_SEPARATOR;
            $cacheFile = 'tempConsts.txt';
            return str_replace($public, '', $serverRoot) . DIRECTORY_SEPARATOR . $cacheDir . $cacheFile;
        }

    }
}