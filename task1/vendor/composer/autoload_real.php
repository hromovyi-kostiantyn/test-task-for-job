<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit40ad9299f417eb5cd91a93eacb47c121
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

        spl_autoload_register(array('ComposerAutoloaderInit40ad9299f417eb5cd91a93eacb47c121', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit40ad9299f417eb5cd91a93eacb47c121', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit40ad9299f417eb5cd91a93eacb47c121::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
