<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8895438f4206c2f8a536430ed1a98320
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
        '6124b4c8570aa390c21fafd04a26c69f' => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy/deep_copy.php',
        'db356362850385d08a5381de2638b5fd' => __DIR__ . '/..' . '/mpdf/mpdf/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'setasign\\Fpdi\\' => 14,
        ),
        'Z' => 
        array (
            'ZipStream\\' => 10,
        ),
        'S' => 
        array (
            'Svg\\' => 4,
            'Sabberworm\\CSS\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'M' => 
        array (
            'Mpdf\\PsrLogAwareTrait\\' => 22,
            'Mpdf\\PsrHttpMessageShim\\' => 24,
            'Mpdf\\' => 5,
            'Matrix\\' => 7,
            'Masterminds\\' => 12,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
            'DeepCopy\\' => 9,
        ),
        'C' => 
        array (
            'Complex\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'setasign\\Fpdi\\' => 
        array (
            0 => __DIR__ . '/..' . '/setasign/fpdi/src',
        ),
        'ZipStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/maennchen/zipstream-php/src',
        ),
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src/Svg',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'Mpdf\\PsrLogAwareTrait\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/psr-log-aware-trait/src',
        ),
        'Mpdf\\PsrHttpMessageShim\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/psr-http-message-shim/src',
        ),
        'Mpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/mpdf/src',
        ),
        'Matrix\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/matrix/classes/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phenx/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
        'DeepCopy\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/deep-copy/src/DeepCopy',
        ),
        'Complex\\' => 
        array (
            0 => __DIR__ . '/..' . '/markbaker/complex/classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8895438f4206c2f8a536430ed1a98320::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8895438f4206c2f8a536430ed1a98320::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8895438f4206c2f8a536430ed1a98320::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit8895438f4206c2f8a536430ed1a98320::$classMap;

        }, null, ClassLoader::class);
    }
}
