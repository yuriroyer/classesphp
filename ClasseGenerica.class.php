<?php
class CatMarca extends ConnDB
{
    //Variável responsável por retornar o resultado de uma ação
    private $query;

    //Função para exeuctar o prepare e o execute em todas as outras funções
    private function prepExec($prep,$exec)
    {
        $this -> query = $this -> getConn() -> prepare($prep);
        $this -> query -> execute($exec);
    }

    public function selectCatMarca($campos,$prep,$exec)
    {
        $this -> prepExec('SELECT '. $campos .' FROM cat_marca '. $prep .'', $exec);
        return $this -> query;
        //return $this -> query retornará o resultado da ação em um var_dump no objeto extanciado
    }

    public function updateCatMarca($prep,$exec)
    {
        $this -> prepExec('UPDATE cat_marca SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function insertCatMarca($prep,$exec)
    {
        $this -> prepExec('INSERT INTO cat_marca SET '. $prep .' ', $exec);
        return $this -> query;
    }
}
?>