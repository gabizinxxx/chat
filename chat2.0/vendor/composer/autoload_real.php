<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf189bbf5a037ea5b052dfd6b5a081668
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf189bbf5a037ea5b052dfd6b5a081668', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf189bbf5a037ea5b052dfd6b5a081668', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf189bbf5a037ea5b052dfd6b5a081668::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}