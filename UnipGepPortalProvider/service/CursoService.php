<?php
require_once("business/CursoBusiness.php");

/**
 * @author Wallace e Cias
 *
 */
class CursoService
{

    var $cursoBusiness;

    public function CursoService()
    {
        $this->cursoBusiness = new CursoBusiness();
    }

    /**
     * Pesquisa todas os cursos
     * @return string
     */
    public function findAll()
    {
        $cursoBusiness = new CursoBusiness();
        $collection = $cursoBusiness->findAll();
        return json_encode($collection);
    }
}
?>