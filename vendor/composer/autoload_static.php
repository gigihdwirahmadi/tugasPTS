<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28df9135ce9cc4af4bfdb485e99758b7
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'miniframework2\\App\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'miniframework2\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'miniframework2\\App\\Config\\Database' => __DIR__ . '/../..' . '/App/Config/Database.php',
        'miniframework2\\App\\Controller\\AdminController' => __DIR__ . '/../..' . '/App/Controller/AdminController.php',
        'miniframework2\\App\\Controller\\HomeController' => __DIR__ . '/../..' . '/App/Controller/HomeController.php',
        'miniframework2\\App\\Controller\\ProgramController' => __DIR__ . '/../..' . '/App/Controller/ProgramController.php',
        'miniframework2\\App\\Controller\\ProgramtrxController' => __DIR__ . '/../..' . '/App/Controller/ProgramtrxController.php',
        'miniframework2\\App\\Controller\\TargetController' => __DIR__ . '/../..' . '/App/Controller/TargetController.php',
        'miniframework2\\App\\Controller\\TargettrxController' => __DIR__ . '/../..' . '/App/Controller/TargettrxController.php',
        'miniframework2\\App\\Controller\\UserController' => __DIR__ . '/../..' . '/App/Controller/UserController.php',
        'miniframework2\\App\\Controller\\WithdrawalController' => __DIR__ . '/../..' . '/App/Controller/WithdrawalController.php',
        'miniframework2\\App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'miniframework2\\App\\Core\\View' => __DIR__ . '/../..' . '/App/Core/View.php',
        'miniframework2\\App\\Middleware\\Auth' => __DIR__ . '/../..' . '/App/Middleware/Auth.php',
        'miniframework2\\App\\Middleware\\Guest' => __DIR__ . '/../..' . '/App/Middleware/Guest.php',
        'miniframework2\\App\\Model\\ModelAdmin' => __DIR__ . '/../..' . '/App/Model/ModelAdmin.php',
        'miniframework2\\App\\Model\\ModelProgram' => __DIR__ . '/../..' . '/App/Model/ModelProgram.php',
        'miniframework2\\App\\Model\\ModelProgramtrx' => __DIR__ . '/../..' . '/App/Model/ModelProgramtrx.php',
        'miniframework2\\App\\Model\\ModelTarget' => __DIR__ . '/../..' . '/App/Model/ModelTarget.php',
        'miniframework2\\App\\Model\\ModelTargettrx' => __DIR__ . '/../..' . '/App/Model/ModelTargettrx.php',
        'miniframework2\\App\\Model\\ModelUser' => __DIR__ . '/../..' . '/App/Model/ModelUser.php',
        'miniframework2\\App\\Model\\ModelWithdrawal' => __DIR__ . '/../..' . '/App/Model/ModelWithdrawal.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28df9135ce9cc4af4bfdb485e99758b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28df9135ce9cc4af4bfdb485e99758b7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28df9135ce9cc4af4bfdb485e99758b7::$classMap;

        }, null, ClassLoader::class);
    }
}
