<?php

/**
 * @author Wallace Silva
 * @version 1.0
 */
interface publicacaoInterface
{
    public function findAll();

    public function select();
    
    public function insert();

    public function update();

    public function delete();
}
?>