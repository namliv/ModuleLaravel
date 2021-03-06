<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9c883010d9211dd7bba1b4dbbcab74b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Post\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Post\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\Post\\Database\\Seeders\\PostDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/PostDatabaseSeeder.php',
        'Modules\\Post\\Http\\Controllers\\PostController' => __DIR__ . '/../..' . '/Http/Controllers/PostController.php',
        'Modules\\Post\\Providers\\PostServiceProvider' => __DIR__ . '/../..' . '/Providers/PostServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite9c883010d9211dd7bba1b4dbbcab74b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9c883010d9211dd7bba1b4dbbcab74b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9c883010d9211dd7bba1b4dbbcab74b::$classMap;

        }, null, ClassLoader::class);
    }
}
