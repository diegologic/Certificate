<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7de93c7b7c99273ebd95647d87024002
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7de93c7b7c99273ebd95647d87024002::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7de93c7b7c99273ebd95647d87024002::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
