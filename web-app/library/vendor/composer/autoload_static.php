<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86d5e6280c10789a595cf6a861b9b162
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit86d5e6280c10789a595cf6a861b9b162::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86d5e6280c10789a595cf6a861b9b162::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit86d5e6280c10789a595cf6a861b9b162::$classMap;

        }, null, ClassLoader::class);
    }
}
