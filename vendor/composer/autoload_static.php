<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit017a582e8592b491173537d0ddcab484
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit017a582e8592b491173537d0ddcab484::$classMap;

        }, null, ClassLoader::class);
    }
}
