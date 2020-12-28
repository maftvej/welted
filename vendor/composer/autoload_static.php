<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00eacf9b86b259ee794e7ab649d4eabb
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit00eacf9b86b259ee794e7ab649d4eabb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00eacf9b86b259ee794e7ab649d4eabb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}