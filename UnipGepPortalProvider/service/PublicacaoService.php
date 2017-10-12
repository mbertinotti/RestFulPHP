<?php
require_once("business/PublicacaoBusiness.php");

/**
 * @author Wallace e Cia
 *
 */
class PublicacaoService
{

    var $publicacaoBusiness;

    public function PublicacaoService()
    {
        $this->publicacaoBusiness = new PublicacaoBusiness();
    }

    /**
     * Pesquisa todas os Publicacaos
     * @return string
     */
    public function findAll()
    {
        $publicacaoBusiness = new PublicacaoBusiness();
        $collection = $publicacaoBusiness->findAll();
        return json_encode($collection);
    }
}
?>