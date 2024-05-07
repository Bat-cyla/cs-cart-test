<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bd00904f8a08a53bcc63f384ac75951
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'socialist\\formula\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'socialist\\formula\\' => 
        array (
            0 => __DIR__ . '/..' . '/seregas/formula/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'socialist\\formula\\ExpressionFactory' => __DIR__ . '/..' . '/seregas/formula/src/ExpressionFactory.php',
        'socialist\\formula\\ExpressionNotFoundException' => __DIR__ . '/..' . '/seregas/formula/src/ExpressionNotFoundException.php',
        'socialist\\formula\\Formula' => __DIR__ . '/..' . '/seregas/formula/src/Formula.php',
        'socialist\\formula\\expression\\Division' => __DIR__ . '/..' . '/seregas/formula/src/expression/Division.php',
        'socialist\\formula\\expression\\Increment' => __DIR__ . '/..' . '/seregas/formula/src/expression/Increment.php',
        'socialist\\formula\\expression\\Multiplication' => __DIR__ . '/..' . '/seregas/formula/src/expression/Multiplication.php',
        'socialist\\formula\\expression\\Operator' => __DIR__ . '/..' . '/seregas/formula/src/expression/Operator.php',
        'socialist\\formula\\expression\\Subtraction' => __DIR__ . '/..' . '/seregas/formula/src/expression/Subtraction.php',
        'socialist\\formula\\operator\\Double' => __DIR__ . '/..' . '/seregas/formula/src/operator/Double.php',
        'socialist\\formula\\operator\\Expression' => __DIR__ . '/..' . '/seregas/formula/src/operator/Expression.php',
        'socialist\\formula\\operator\\Integer' => __DIR__ . '/..' . '/seregas/formula/src/operator/Integer.php',
        'socialist\\formula\\operator\\Percent' => __DIR__ . '/..' . '/seregas/formula/src/operator/Percent.php',
        'socialist\\formula\\operator\\Variable' => __DIR__ . '/..' . '/seregas/formula/src/operator/Variable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bd00904f8a08a53bcc63f384ac75951::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bd00904f8a08a53bcc63f384ac75951::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bd00904f8a08a53bcc63f384ac75951::$classMap;

        }, null, ClassLoader::class);
    }
}
