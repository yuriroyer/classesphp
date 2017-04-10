<?php
class ClasseGenerica extends ConnDB
{
    //Variável responsável por retornar o resultado de uma ação
    private $query;

    //Função para exeuctar o prepare e o execute em todas as outras funções
    private function prepExec($prep,$exec)
    {
        $this -> query = $this -> getConn() -> prepare($prep);
        $this -> query -> execute($exec);
    }

    public function selectClasseGenerica($campos,$prep,$exec)
    {
        $this -> prepExec('SELECT '. $campos .' FROM nome_tabela '. $prep .'', $exec);
        return $this -> query;
        //return $this -> query retornará o resultado da ação em um var_dump no objeto extanciado
    }

    public function updateClasseGenerica($prep,$exec)
    {
        $this -> prepExec('UPDATE nome_tabela SET '. $prep .' ', $exec);
        return $this -> query;
    }

    public function insertClasseGenerica($prep,$exec)
    {
        $this -> prepExec('INSERT INTO nome_tabela SET '. $prep .' ', $exec);
        return $this -> query;
    }
}
?>