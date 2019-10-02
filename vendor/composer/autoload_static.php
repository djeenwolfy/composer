<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4d7b40bad763368c61c418b80a399d8
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lang\\' => 5,
        ),
        'L' => 
        array (
            'Lang\\russian\\rus\\' => 17,
            'Lang\\engish\\engl\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lang',
        ),
        'Lang\\russian\\rus\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lang/russian/rus',
        ),
        'Lang\\engish\\engl\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Lang/engish/engl',
        ),
    );

    public static $classMap = array (
        'lang\\Lang' => __DIR__ . '/../..' . '/Lang/lang.php',
        'lang\\english\\engl\\Engl' => __DIR__ . '/../..' . '/Lang/english/engl.php',
        'lang\\russian\\rus\\Rus' => __DIR__ . '/../..' . '/Lang/russian/rus.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4d7b40bad763368c61c418b80a399d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4d7b40bad763368c61c418b80a399d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4d7b40bad763368c61c418b80a399d8::$classMap;

        }, null, ClassLoader::class);
    }
}
