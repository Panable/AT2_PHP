<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita48a34713fa352d8c3197d00dfa07d8a
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'joshtronic\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'joshtronic\\' => 
        array (
            0 => __DIR__ . '/..' . '/joshtronic/php-loremipsum/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cheltonmvc/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita48a34713fa352d8c3197d00dfa07d8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita48a34713fa352d8c3197d00dfa07d8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita48a34713fa352d8c3197d00dfa07d8a::$classMap;

        }, null, ClassLoader::class);
    }
}