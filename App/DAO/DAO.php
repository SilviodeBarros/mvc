<?php
namespace App\DAO;
use PDO;

class DAO extends PDO {

    protected static $conexao;
     
    function __construct()
    {
    $dsn="mysql:host=localhost;dbname=biblioteca";
        self::$conexao = new PDO($dsn, 'root', '123456');
        self::$conexao->setAttribute(pDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    }
}
