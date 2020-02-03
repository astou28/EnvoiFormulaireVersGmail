<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cc7f9314bbb5877220c52d128cd2b1a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cc7f9314bbb5877220c52d128cd2b1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cc7f9314bbb5877220c52d128cd2b1a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
