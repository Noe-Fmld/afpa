<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit768a41848562c50bdb340aff5f7148a0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\core\\' => 9,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit768a41848562c50bdb340aff5f7148a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit768a41848562c50bdb340aff5f7148a0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit768a41848562c50bdb340aff5f7148a0::$classMap;

        }, null, ClassLoader::class);
    }
}
