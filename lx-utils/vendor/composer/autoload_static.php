<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5867a2e14a88907cd3acadf0c35ba9d
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lx\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lx\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5867a2e14a88907cd3acadf0c35ba9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5867a2e14a88907cd3acadf0c35ba9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf5867a2e14a88907cd3acadf0c35ba9d::$classMap;

        }, null, ClassLoader::class);
    }
}
