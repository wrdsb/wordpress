<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90d1c1ca414ed483421403dae10ba3b9
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monorepo\\' => 
            array (
                0 => __DIR__ . '/..' . '/beberlei/composer-monorepo-plugin/src/main',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit90d1c1ca414ed483421403dae10ba3b9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit90d1c1ca414ed483421403dae10ba3b9::$classMap;

        }, null, ClassLoader::class);
    }
}
