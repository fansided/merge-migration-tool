<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit57544a3e7e80a423371baf0435f2ee66
{
    public static $classMap = array (
        'WPAZ_Plugin_Base\\V_2_0\\Abstract_Plugin' => __DIR__ . '/..' . '/wordpress-phoenix/abstract-plugin-base/src/abstract_plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit57544a3e7e80a423371baf0435f2ee66::$classMap;

        }, null, ClassLoader::class);
    }
}