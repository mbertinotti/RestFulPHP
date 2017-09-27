<?php

require_once("util/Factory.php");

/**
 * @author Wallace e Cia
 *
 */
class PublicacaoBusiness
{

    public $con;

    public function PublicacaoBusiness()
    {
        $this->con = new Factory();
    }

    /**
     * Pesquisa todos os Publicacaos
     * @return String json contendo os Publicoess
     */
    public function findAll()
    {
        $query = "select * from Publicacao";
        $rs = $this->con->getConnection()->query($query);

        $collection = $rs->fetchAll(PDO::FETCH_OBJ);
        return $collection;
    }

}

?>