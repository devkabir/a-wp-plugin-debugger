<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27d0d888b77f5b0f453c4f6cc060ed51
{
    public static $files = array (
        '8bf8efe498dfc1d1cc07ec27880319f4' => __DIR__ . '/../..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DevKabir\\WPDebugger\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DevKabir\\WPDebugger\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'DevKabir\\WPDebugger\\DebugBar' => __DIR__ . '/../..' . '/src/DebugBar.php',
        'DevKabir\\WPDebugger\\ErrorPage' => __DIR__ . '/../..' . '/src/ErrorPage.php',
        'DevKabir\\WPDebugger\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'DevKabir\\WPDebugger\\Template' => __DIR__ . '/../..' . '/src/Template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit27d0d888b77f5b0f453c4f6cc060ed51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27d0d888b77f5b0f453c4f6cc060ed51::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27d0d888b77f5b0f453c4f6cc060ed51::$classMap;

        }, null, ClassLoader::class);
    }
}
