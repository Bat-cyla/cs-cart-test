<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit1bd00904f8a08a53bcc63f384ac75951
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

        spl_autoload_register(array('ComposerAutoloaderInit1bd00904f8a08a53bcc63f384ac75951', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit1bd00904f8a08a53bcc63f384ac75951', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInit1bd00904f8a08a53bcc63f384ac75951::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}