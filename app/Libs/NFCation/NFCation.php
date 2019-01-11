<?php
/*
|--------------------------------------------------------------------------
|
| NFCation Lib
| Autor: Paulo Henrique Ribeiro de Souza
|
| Biblioteca Baseada na prmToolkit.NotificationPattern para C# :
|       git url https://github.com/pauloanalista/prmToolkit.NotificationPattern
|--------------------------------------------------------------------------
|
|--------------------------------------------------------------------------
*/
namespace Notification;

require_once __DIR__ . '/bin/OBNotification.php';
require_once __DIR__ . '/bin/NFCationConfig.php';
require_once __DIR__ . '/bin/NFCationIdioma.php';
use Notification\bin as bin;

class NFCation extends bin\OBNotification
{
    /**
     * NFCation constructor.
     */
    public function __construct(){


    }
}
