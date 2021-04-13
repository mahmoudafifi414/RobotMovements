<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit79b512671338fa90cb76620e58241085
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Output\\' => 7,
        ),
        'F' => 
        array (
            'Factories\\' => 10,
        ),
        'D' => 
        array (
            'Directions\\' => 11,
        ),
        'C' => 
        array (
            'Coordinates\\' => 12,
            'Controllers\\' => 12,
        ),
        'A' => 
        array (
            'Adapters\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Output\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Output',
        ),
        'Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Factories',
        ),
        'Directions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Directions',
        ),
        'Coordinates\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Coordinates',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
        'Adapters\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Adapters',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit79b512671338fa90cb76620e58241085::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit79b512671338fa90cb76620e58241085::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit79b512671338fa90cb76620e58241085::$classMap;

        }, null, ClassLoader::class);
    }
}
