<?php
/**
 * Created by PhpStorm.
 * User: paulo-pc
 * Date: 10/01/2019
 * Time: 00:54
 */

namespace Teste\Domain;

require_once  __DIR__ . "/../../vendor/autoload.php";

use App\SGFP\Domain\Entidades as Entidades;

$client = new Entidades\Cliente("064.111.661-65");

echo "<pre>";

print_r($client);


