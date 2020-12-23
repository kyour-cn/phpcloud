<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d1bd06fddcb91b500dac247d12a5fa1
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d1bd06fddcb91b500dac247d12a5fa1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d1bd06fddcb91b500dac247d12a5fa1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d1bd06fddcb91b500dac247d12a5fa1::$classMap;

        }, null, ClassLoader::class);
    }
}
