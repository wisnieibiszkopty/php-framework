<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4ca22c9e6ab27735f74e11fab3fc689c
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kamil\\Framework\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kamil\\Framework\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4ca22c9e6ab27735f74e11fab3fc689c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4ca22c9e6ab27735f74e11fab3fc689c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4ca22c9e6ab27735f74e11fab3fc689c::$classMap;

        }, null, ClassLoader::class);
    }
}
