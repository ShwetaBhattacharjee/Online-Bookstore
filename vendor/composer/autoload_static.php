<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedcd60046eaa55f0f45ae56653b035ae
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitedcd60046eaa55f0f45ae56653b035ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedcd60046eaa55f0f45ae56653b035ae::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
