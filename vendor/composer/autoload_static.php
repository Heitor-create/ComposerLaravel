<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6d2fc2a5ce6270dde9be42b5b14e45b
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wead\\DigitalCep\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wead\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6d2fc2a5ce6270dde9be42b5b14e45b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6d2fc2a5ce6270dde9be42b5b14e45b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita6d2fc2a5ce6270dde9be42b5b14e45b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita6d2fc2a5ce6270dde9be42b5b14e45b::$classMap;

        }, null, ClassLoader::class);
    }
}
