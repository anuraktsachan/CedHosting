<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita51a0f545f384285f4d2ab9f55f5e5e8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita51a0f545f384285f4d2ab9f55f5e5e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita51a0f545f384285f4d2ab9f55f5e5e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}