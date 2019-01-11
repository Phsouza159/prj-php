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


class b {

    private $a;
    private $b;
    public function __construct()
    {
        $this->a = 1;
    }

}


class Cliente  extends Notification\NFCation
{
    private $a = "a";
    private $cpf ;
    private $b ;

    /**
     * Cliente constructor.
     * @param $cpf
     * @throws \Exception
     */
    public function __construct($cpf)
    {
        $this->cpf = $cpf;
        $this->a = $cpf;
        $this->b = new b();
        $this->Start($this)
            ->IsCpf($this->cpf)
            ->IsObjectElementsEmpty( $this->b);
    }

}
