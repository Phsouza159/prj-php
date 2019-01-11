<?php
/**
 * Created by PhpStorm.
 * User: paulo-pc
 * Date: 11/01/2019
 * Time: 01:45
 */

namespace Notification\bin;

require_once __DIR__ . "/NFCationConfig.php";


class NFCationIdioma
{
    private static $Idiomma = array();
    private static $caminho = __DIR__ . "/Idioma/";


    public static function GetIdioma()
    {
        return  json_decode(self::GetFileIdioma( NFCationConfig::GetIdioma()) ) ;
    }

    private static function GetFileIdioma( $idioma )
    {
        return ( file_get_contents( self::$caminho . $idioma ) ) ;
    }
}
