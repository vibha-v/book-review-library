<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite67d15afe2ce30376d67a7b177192216
{
    public static $files = array (
        'a2c48002d05f7782d8b603bd2bcb5252' => __DIR__ . '/..' . '/johnbillion/extended-cpts/extended-cpts.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PSR2R\\' => 6,
        ),
        'D' => 
        array (
            'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 55,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PSR2R\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig-r/psr2r-sniffer/PSR2R',
        ),
        'Dealerdirect\\Composer\\Plugin\\Installers\\PHPCodeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/dealerdirect/phpcodesniffer-composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite67d15afe2ce30376d67a7b177192216::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite67d15afe2ce30376d67a7b177192216::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
