<?php
require_once("business/AlunoBusiness.php");

/**
 * @author Wallace e Cia
 *
 */
class AlunoService
{

    var $alunoBusiness;

    public function AlunoService()
    {
        $this->alunoBusiness = new AlunoBusiness();
    }

    /**
     * Pesquisa todas os Alunos
     * @return string
     */
    public function findAll()
    {
        $alunoBusiness = new AlunoBusiness();
        $collection = $alunoBusiness->findAll();
        return json_encode($collection);
    }
}
?>