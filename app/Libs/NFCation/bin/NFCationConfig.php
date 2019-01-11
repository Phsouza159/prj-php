<?php
/**
 * Created by PhpStorm.
 * User: paulo-pc
 * Date: 11/01/2019
 * Time: 01:25
 */

namespace Notification\bin;


class NFCationConfig
{
    private static $_Config = [

      "IDIOMA" => "pt-BR",

      "Lang" => [
            "pt-BR" => "pt-BR.json" ,
            "eua" => "eua.json"
          ],

        "FileLog" => [
            "externo" => "" ,
            "interno" => ""
        ]

    ];

    /**
     * configurar idioma
     * @param string $idioma
     */
    public static function SetIdioma(string $idioma )
    {
        self::$_Config["IDIOMA"] = $idioma;
    }

    public static function GetIdioma() : string
    {
        return empty(self::$_Config["IDIOMA"])
            ? "pt-BR.json"
                : (isset( self::$_Config["Lang"][self::$_Config["IDIOMA"]] )
                    ? self::$_Config["Lang"][self::$_Config["IDIOMA"]]
                        : "pt-BR.json");
    }
}
