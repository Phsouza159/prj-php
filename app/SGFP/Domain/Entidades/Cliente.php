<?php
/**
 * Created by PhpStorm.
 * User: paulo-pc
 * Date: 10/01/2019
 * Time: 00:38
 */

namespace App\SGFP\Domain\Entidades;

require_once __DIR__ . "/../../../Libs/Lib.php";

Use Notification;

class Cliente  extends Notification\NFCation
{
    public $cpf ;

    /**
     * Cliente constructor.
     * @param $cpf
     * @throws \Exception
     */
    public function __construct($cpf)
    {
        $this->cpf = $cpf;

        $this->GetVar( array_keys(get_object_vars($this))  )
            ->IsCpf($this->cpf);
    }

}
