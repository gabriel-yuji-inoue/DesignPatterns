<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03ca35cfba22d4cf9466481de9b28bc9
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yj\\DesignPattern\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yj\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03ca35cfba22d4cf9466481de9b28bc9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03ca35cfba22d4cf9466481de9b28bc9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
