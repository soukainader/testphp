<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63f21fd93a5692b41c6b9cb0ad725c1f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63f21fd93a5692b41c6b9cb0ad725c1f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63f21fd93a5692b41c6b9cb0ad725c1f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63f21fd93a5692b41c6b9cb0ad725c1f::$classMap;

        }, null, ClassLoader::class);
    }
}
