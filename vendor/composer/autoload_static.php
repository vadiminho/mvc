<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedf66d2ac25aa065ee2c9ac5bdb03d4d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedf66d2ac25aa065ee2c9ac5bdb03d4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedf66d2ac25aa065ee2c9ac5bdb03d4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitedf66d2ac25aa065ee2c9ac5bdb03d4d::$classMap;

        }, null, ClassLoader::class);
    }
}
