<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbac75c1e62c2b3549833e4f840c298ee
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NinjaForms\\NinjaForms\\' => 22,
            'NinjaForms\\Includes\\' => 20,
            'NinjaForms\\Blocks\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NinjaForms\\NinjaForms\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'NinjaForms\\Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'NinjaForms\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/blocks/views/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbac75c1e62c2b3549833e4f840c298ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbac75c1e62c2b3549833e4f840c298ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbac75c1e62c2b3549833e4f840c298ee::$classMap;

        }, null, ClassLoader::class);
    }
}
