<?php
abstract class ConnDB
{
    public static $conn;
    public function setConn()
    {
        return
            is_null(self::$conn) ?
                self::$conn=new PDO('mysql:host=localhost;charset=utf8;dbname=NOME_BANCO_DE_DADOS', 'USUARIO_BRANCO_DE_DADOS', 'SENHA_BANCO_DE_DADOS') :
                self::$conn;

    }
    public function getConn() { return $this->setConn(); }

}
?>