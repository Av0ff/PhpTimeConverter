<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc46c8122a7cff33fd0532fe2fc6dc56e
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

        spl_autoload_register(array('ComposerAutoloaderInitc46c8122a7cff33fd0532fe2fc6dc56e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc46c8122a7cff33fd0532fe2fc6dc56e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc46c8122a7cff33fd0532fe2fc6dc56e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
