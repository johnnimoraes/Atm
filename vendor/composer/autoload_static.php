<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0180aff4abb1facfce5f22170a8728ec
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Atm\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Atm\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0180aff4abb1facfce5f22170a8728ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0180aff4abb1facfce5f22170a8728ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0180aff4abb1facfce5f22170a8728ec::$classMap;

        }, null, ClassLoader::class);
    }
}
