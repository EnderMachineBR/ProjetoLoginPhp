<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7895755c68562216fb6e65a21e7d72f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7895755c68562216fb6e65a21e7d72f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7895755c68562216fb6e65a21e7d72f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita7895755c68562216fb6e65a21e7d72f::$classMap;

        }, null, ClassLoader::class);
    }
}
