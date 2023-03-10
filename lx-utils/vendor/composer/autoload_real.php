<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf5867a2e14a88907cd3acadf0c35ba9d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitf5867a2e14a88907cd3acadf0c35ba9d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf5867a2e14a88907cd3acadf0c35ba9d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf5867a2e14a88907cd3acadf0c35ba9d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
