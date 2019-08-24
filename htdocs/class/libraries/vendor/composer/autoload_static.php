<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb0e5c3e4af98ed910184391855ba473
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '3917c79c5052b270641b5a200963dbc2' => __DIR__ . '/..' . '/kint-php/kint/init.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        'def43f6c87e4f8dfd0c9e1b1bab14fe8' => __DIR__ . '/..' . '/symfony/polyfill-iconv/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xmf\\' => 4,
        ),
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Iconv\\' => 23,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Yaml\\' => 23,
        ),
        'G' => 
        array (
            'Geekwright\\RegDom\\' => 18,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xmf\\' => 
        array (
            0 => __DIR__ . '/..' . '/xoops/xmf/src',
        ),
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Iconv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-iconv',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Geekwright\\RegDom\\' => 
        array (
            0 => __DIR__ . '/..' . '/geekwright/regdom/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'WideImage' => 
            array (
                0 => __DIR__ . '/..' . '/smottt/wideimage/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Firebase\\JWT\\BeforeValidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/BeforeValidException.php',
        'Firebase\\JWT\\ExpiredException' => __DIR__ . '/..' . '/firebase/php-jwt/src/ExpiredException.php',
        'Firebase\\JWT\\JWT' => __DIR__ . '/..' . '/firebase/php-jwt/src/JWT.php',
        'Firebase\\JWT\\SignatureInvalidException' => __DIR__ . '/..' . '/firebase/php-jwt/src/SignatureInvalidException.php',
        'Geekwright\\RegDom\\PublicSuffixList' => __DIR__ . '/..' . '/geekwright/regdom/src/PublicSuffixList.php',
        'Geekwright\\RegDom\\RegisteredDomain' => __DIR__ . '/..' . '/geekwright/regdom/src/RegisteredDomain.php',
        'Kint' => __DIR__ . '/..' . '/kint-php/kint/src/Kint.php',
        'Kint_Object' => __DIR__ . '/..' . '/kint-php/kint/src/Object.php',
        'Kint_Object_Blob' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Blob.php',
        'Kint_Object_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Closure.php',
        'Kint_Object_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Color.php',
        'Kint_Object_DateTime' => __DIR__ . '/..' . '/kint-php/kint/src/Object/DateTime.php',
        'Kint_Object_Instance' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Instance.php',
        'Kint_Object_Method' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Method.php',
        'Kint_Object_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Nothing.php',
        'Kint_Object_Parameter' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Parameter.php',
        'Kint_Object_Representation' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation.php',
        'Kint_Object_Representation_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Color.php',
        'Kint_Object_Representation_Docstring' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Docstring.php',
        'Kint_Object_Representation_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Microtime.php',
        'Kint_Object_Representation_Source' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/Source.php',
        'Kint_Object_Representation_SplFileInfo' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Representation/SplFileInfo.php',
        'Kint_Object_Resource' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Resource.php',
        'Kint_Object_Stream' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Stream.php',
        'Kint_Object_Throwable' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Throwable.php',
        'Kint_Object_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Object/Trace.php',
        'Kint_Object_TraceFrame' => __DIR__ . '/..' . '/kint-php/kint/src/Object/TraceFrame.php',
        'Kint_Parser' => __DIR__ . '/..' . '/kint-php/kint/src/Parser.php',
        'Kint_Parser_Base64' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Base64.php',
        'Kint_Parser_Binary' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Binary.php',
        'Kint_Parser_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Blacklist.php',
        'Kint_Parser_ClassMethods' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassMethods.php',
        'Kint_Parser_ClassStatics' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ClassStatics.php',
        'Kint_Parser_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Closure.php',
        'Kint_Parser_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Color.php',
        'Kint_Parser_DOMIterator' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DOMIterator.php',
        'Kint_Parser_DOMNode' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DOMNode.php',
        'Kint_Parser_DateTime' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/DateTime.php',
        'Kint_Parser_FsPath' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/FsPath.php',
        'Kint_Parser_Iterator' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Iterator.php',
        'Kint_Parser_Json' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Json.php',
        'Kint_Parser_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Microtime.php',
        'Kint_Parser_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Plugin.php',
        'Kint_Parser_Serialize' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Serialize.php',
        'Kint_Parser_SimpleXMLElement' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SimpleXMLElement.php',
        'Kint_Parser_SplFileInfo' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplFileInfo.php',
        'Kint_Parser_SplObjectStorage' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/SplObjectStorage.php',
        'Kint_Parser_Stream' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Stream.php',
        'Kint_Parser_Table' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Table.php',
        'Kint_Parser_Throwable' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Throwable.php',
        'Kint_Parser_Timestamp' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Timestamp.php',
        'Kint_Parser_ToString' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/ToString.php',
        'Kint_Parser_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Trace.php',
        'Kint_Parser_Xml' => __DIR__ . '/..' . '/kint-php/kint/src/Parser/Xml.php',
        'Kint_Renderer' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer.php',
        'Kint_Renderer_Cli' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Cli.php',
        'Kint_Renderer_Plain' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Plain.php',
        'Kint_Renderer_Rich' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich.php',
        'Kint_Renderer_Rich_Binary' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Binary.php',
        'Kint_Renderer_Rich_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Blacklist.php',
        'Kint_Renderer_Rich_Callable' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Callable.php',
        'Kint_Renderer_Rich_Closure' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Closure.php',
        'Kint_Renderer_Rich_Color' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Color.php',
        'Kint_Renderer_Rich_ColorDetails' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/ColorDetails.php',
        'Kint_Renderer_Rich_DepthLimit' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/DepthLimit.php',
        'Kint_Renderer_Rich_Docstring' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Docstring.php',
        'Kint_Renderer_Rich_Microtime' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Microtime.php',
        'Kint_Renderer_Rich_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Nothing.php',
        'Kint_Renderer_Rich_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Plugin.php',
        'Kint_Renderer_Rich_Recursion' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Recursion.php',
        'Kint_Renderer_Rich_SimpleXMLElement' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/SimpleXMLElement.php',
        'Kint_Renderer_Rich_Source' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Source.php',
        'Kint_Renderer_Rich_Table' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Table.php',
        'Kint_Renderer_Rich_Timestamp' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/Timestamp.php',
        'Kint_Renderer_Rich_TraceFrame' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Rich/TraceFrame.php',
        'Kint_Renderer_Text' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text.php',
        'Kint_Renderer_Text_Blacklist' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Blacklist.php',
        'Kint_Renderer_Text_DepthLimit' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/DepthLimit.php',
        'Kint_Renderer_Text_Nothing' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Nothing.php',
        'Kint_Renderer_Text_Plugin' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Plugin.php',
        'Kint_Renderer_Text_Recursion' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Recursion.php',
        'Kint_Renderer_Text_Trace' => __DIR__ . '/..' . '/kint-php/kint/src/Renderer/Text/Trace.php',
        'Kint_SourceParser' => __DIR__ . '/..' . '/kint-php/kint/src/SourceParser.php',
        'Symfony\\Component\\Yaml\\Dumper' => __DIR__ . '/..' . '/symfony/yaml/Dumper.php',
        'Symfony\\Component\\Yaml\\Escaper' => __DIR__ . '/..' . '/symfony/yaml/Escaper.php',
        'Symfony\\Component\\Yaml\\Exception\\DumpException' => __DIR__ . '/..' . '/symfony/yaml/Exception/DumpException.php',
        'Symfony\\Component\\Yaml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/yaml/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Yaml\\Exception\\ParseException' => __DIR__ . '/..' . '/symfony/yaml/Exception/ParseException.php',
        'Symfony\\Component\\Yaml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/yaml/Exception/RuntimeException.php',
        'Symfony\\Component\\Yaml\\Inline' => __DIR__ . '/..' . '/symfony/yaml/Inline.php',
        'Symfony\\Component\\Yaml\\Parser' => __DIR__ . '/..' . '/symfony/yaml/Parser.php',
        'Symfony\\Component\\Yaml\\Unescaper' => __DIR__ . '/..' . '/symfony/yaml/Unescaper.php',
        'Symfony\\Component\\Yaml\\Yaml' => __DIR__ . '/..' . '/symfony/yaml/Yaml.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'Symfony\\Polyfill\\Iconv\\Iconv' => __DIR__ . '/..' . '/symfony/polyfill-iconv/Iconv.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Webmozart\\Assert\\Assert' => __DIR__ . '/..' . '/webmozart/assert/src/Assert.php',
        'WideImage\\Canvas' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Canvas.php',
        'WideImage\\Coordinate' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Coordinate.php',
        'WideImage\\Exception\\Exception' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/Exception.php',
        'WideImage\\Exception\\GDFunctionResultException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/GDFunctionResultException.php',
        'WideImage\\Exception\\InvalidCanvasMethodException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidCanvasMethodException.php',
        'WideImage\\Exception\\InvalidCoordinateException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidCoordinateException.php',
        'WideImage\\Exception\\InvalidFontFileException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidFontFileException.php',
        'WideImage\\Exception\\InvalidImageDimensionException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageDimensionException.php',
        'WideImage\\Exception\\InvalidImageHandleException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageHandleException.php',
        'WideImage\\Exception\\InvalidImageSourceException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/InvalidImageSourceException.php',
        'WideImage\\Exception\\NoFontException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/NoFontException.php',
        'WideImage\\Exception\\UnknownErrorWhileMappingException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnknownErrorWhileMappingException.php',
        'WideImage\\Exception\\UnknownImageOperationException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnknownImageOperationException.php',
        'WideImage\\Exception\\UnsupportedFormatException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Exception/UnsupportedFormatException.php',
        'WideImage\\Font\\GDF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/GDF.php',
        'WideImage\\Font\\PS' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/PS.php',
        'WideImage\\Font\\TTF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Font/TTF.php',
        'WideImage\\Image' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Image.php',
        'WideImage\\MapperFactory' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/MapperFactory.php',
        'WideImage\\Mapper\\BMP' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/BMP.php',
        'WideImage\\Mapper\\GD' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GD.php',
        'WideImage\\Mapper\\GD2' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GD2.php',
        'WideImage\\Mapper\\GIF' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/GIF.php',
        'WideImage\\Mapper\\JPEG' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/JPEG.php',
        'WideImage\\Mapper\\PNG' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/PNG.php',
        'WideImage\\Mapper\\TGA' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/TGA.php',
        'WideImage\\Mapper\\WEBP' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Mapper/WEBP.php',
        'WideImage\\OperationFactory' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/OperationFactory.php',
        'WideImage\\Operation\\AddNoise' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AddNoise.php',
        'WideImage\\Operation\\ApplyConvolution' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyConvolution.php',
        'WideImage\\Operation\\ApplyFilter' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyFilter.php',
        'WideImage\\Operation\\ApplyMask' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ApplyMask.php',
        'WideImage\\Operation\\AsGrayscale' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AsGrayscale.php',
        'WideImage\\Operation\\AsNegative' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AsNegative.php',
        'WideImage\\Operation\\AutoCrop' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/AutoCrop.php',
        'WideImage\\Operation\\CopyChannelsPalette' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CopyChannelsPalette.php',
        'WideImage\\Operation\\CopyChannelsTrueColor' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CopyChannelsTrueColor.php',
        'WideImage\\Operation\\CorrectGamma' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/CorrectGamma.php',
        'WideImage\\Operation\\Crop' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Crop.php',
        'WideImage\\Operation\\Exception\\InvalidFitMethodException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Exception/InvalidFitMethodException.php',
        'WideImage\\Operation\\Exception\\InvalidResizeDimensionException' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Exception/InvalidResizeDimensionException.php',
        'WideImage\\Operation\\Flip' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Flip.php',
        'WideImage\\Operation\\GetMask' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/GetMask.php',
        'WideImage\\Operation\\Merge' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Merge.php',
        'WideImage\\Operation\\Mirror' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Mirror.php',
        'WideImage\\Operation\\Resize' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Resize.php',
        'WideImage\\Operation\\ResizeCanvas' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/ResizeCanvas.php',
        'WideImage\\Operation\\Rotate' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Rotate.php',
        'WideImage\\Operation\\RoundCorners' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/RoundCorners.php',
        'WideImage\\Operation\\Unsharp' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/Operation/Unsharp.php',
        'WideImage\\PaletteImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/PaletteImage.php',
        'WideImage\\TrueColorImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/TrueColorImage.php',
        'WideImage\\WideImage' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/WideImage.php',
        'WideImage\\vendor\\de77\\BMP' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/vendor/de77/BMP.php',
        'WideImage\\vendor\\de77\\TGA' => __DIR__ . '/..' . '/smottt/wideimage/lib/WideImage/vendor/de77/TGA.php',
        'Xmf\\Assert' => __DIR__ . '/..' . '/xoops/xmf/src/Assert.php',
        'Xmf\\Database\\Migrate' => __DIR__ . '/..' . '/xoops/xmf/src/Database/Migrate.php',
        'Xmf\\Database\\TableLoad' => __DIR__ . '/..' . '/xoops/xmf/src/Database/TableLoad.php',
        'Xmf\\Database\\Tables' => __DIR__ . '/..' . '/xoops/xmf/src/Database/Tables.php',
        'Xmf\\Debug' => __DIR__ . '/..' . '/xoops/xmf/src/Debug.php',
        'Xmf\\FilterInput' => __DIR__ . '/..' . '/xoops/xmf/src/FilterInput.php',
        'Xmf\\Highlighter' => __DIR__ . '/..' . '/xoops/xmf/src/Highlighter.php',
        'Xmf\\IPAddress' => __DIR__ . '/..' . '/xoops/xmf/src/IPAddress.php',
        'Xmf\\Jwt\\JsonWebToken' => __DIR__ . '/..' . '/xoops/xmf/src/Jwt/JsonWebToken.php',
        'Xmf\\Jwt\\KeyFactory' => __DIR__ . '/..' . '/xoops/xmf/src/Jwt/KeyFactory.php',
        'Xmf\\Jwt\\TokenFactory' => __DIR__ . '/..' . '/xoops/xmf/src/Jwt/TokenFactory.php',
        'Xmf\\Jwt\\TokenReader' => __DIR__ . '/..' . '/xoops/xmf/src/Jwt/TokenReader.php',
        'Xmf\\Key\\ArrayStorage' => __DIR__ . '/..' . '/xoops/xmf/src/Key/ArrayStorage.php',
        'Xmf\\Key\\Basic' => __DIR__ . '/..' . '/xoops/xmf/src/Key/Basic.php',
        'Xmf\\Key\\FileStorage' => __DIR__ . '/..' . '/xoops/xmf/src/Key/FileStorage.php',
        'Xmf\\Key\\KeyAbstract' => __DIR__ . '/..' . '/xoops/xmf/src/Key/KeyAbstract.php',
        'Xmf\\Key\\StorageInterface' => __DIR__ . '/..' . '/xoops/xmf/src/Key/StorageInterface.php',
        'Xmf\\Language' => __DIR__ . '/..' . '/xoops/xmf/src/Language.php',
        'Xmf\\Metagen' => __DIR__ . '/..' . '/xoops/xmf/src/Metagen.php',
        'Xmf\\Module\\Admin' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Admin.php',
        'Xmf\\Module\\Helper' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper.php',
        'Xmf\\Module\\Helper\\AbstractHelper' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper/AbstractHelper.php',
        'Xmf\\Module\\Helper\\Cache' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper/Cache.php',
        'Xmf\\Module\\Helper\\GenericHelper' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper/GenericHelper.php',
        'Xmf\\Module\\Helper\\Permission' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper/Permission.php',
        'Xmf\\Module\\Helper\\Session' => __DIR__ . '/..' . '/xoops/xmf/src/Module/Helper/Session.php',
        'Xmf\\Random' => __DIR__ . '/..' . '/xoops/xmf/src/Random.php',
        'Xmf\\Request' => __DIR__ . '/..' . '/xoops/xmf/src/Request.php',
        'Xmf\\StopWords' => __DIR__ . '/..' . '/xoops/xmf/src/StopWords.php',
        'Xmf\\Uuid' => __DIR__ . '/..' . '/xoops/xmf/src/Uuid.php',
        'Xmf\\Yaml' => __DIR__ . '/..' . '/xoops/xmf/src/Yaml.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb0e5c3e4af98ed910184391855ba473::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb0e5c3e4af98ed910184391855ba473::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfb0e5c3e4af98ed910184391855ba473::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfb0e5c3e4af98ed910184391855ba473::$classMap;

        }, null, ClassLoader::class);
    }
}
