<?php
class Loja extends ConnDB
{
    //Variável responsável por retornar o resultado de uma ação
    private $query;

    //Função para exeuctar o prepare e o execute em todas as outras funções
    private function prepExec($prep,$exec)
    {
        $this -> query = $this -> getConn() -> prepare($prep);
        $this -> query -> execute($exec);
    }

    public function selecionaLoja($campos,$prep,$exec)
    {
        $this -> prepExec('SELECT '. $campos .' FROM lojas '. $prep .'', $exec);
        return $this -> query;
        //return $this -> query retornará o resultado da ação em um var_dump no objeto extanciado
    }

    public function atualizaLoja($prep,$exec)
    {
        $this -> prepExec('UPDATE lojas SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function insereLoja($prep,$exec)
    {
        $this -> prepExec('INSERT INTO lojas SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function deletaLoja($prep,$exec)
    {
        $this -> prepExec('DELETE FROM lojas '. $prep .' ', $exec);
        return $this -> query;
    }
}
?>