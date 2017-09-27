<?php

require_once("util/Factory.php");

/**
 * @author Wallace e Cia
 *
 */
class CursoBusiness
{

    public $con;

    public function CursoBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Pesquisa todos os cursos
     * @return String json contendo os cursos
     */
    public function findAll()
    {
        $query = "select * from Curso";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

}

?>