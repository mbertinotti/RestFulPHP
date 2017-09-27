<?php

require_once("util/Factory.php");

/**
 * @author Wallace e Cia
 *
 */
class AlunoBusiness
{

    public $con;

    public function AlunoBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Pesquisa todos os Alunos
     * @return String json contendo os Alunos
     */
    public function findAll()
    {
        $query = "select * from Aluno";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

}

?>