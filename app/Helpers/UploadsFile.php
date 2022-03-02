<?php

namespace App\Helpers;

class UploadsFile
{
    public static $uploadPaths = array(
        'profile_photos'=>'/uploads/profile'
    );

    public static function getUploadPAth($path)
    {
        return public_path().self::$uploadPaths[$path];
    }
}
