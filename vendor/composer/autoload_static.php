<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87e3c1cb070f0e103219bbeeb95ac117
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit87e3c1cb070f0e103219bbeeb95ac117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87e3c1cb070f0e103219bbeeb95ac117::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87e3c1cb070f0e103219bbeeb95ac117::$classMap;

        }, null, ClassLoader::class);
    }
}
