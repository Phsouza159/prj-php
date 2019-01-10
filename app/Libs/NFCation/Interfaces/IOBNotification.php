<?php

namespace Notification\Interfaces ;

interface IOBNotification
{
    function IsValid() : bool;
    function IsInValid() : bool;
    function GetNotifications() : array;
    function AddNotificationObject( $object ) : void;
    function AddNotification(string $var , string  $mes ) : void;

}
