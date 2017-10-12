<?php
		require_once("business/IndicadorBusiness.php");
	
		/**
		 * @author Wallace
		 *
		 */
		class IndicadorService
		{
		
				var $indicadorBusiness;
				public function indicadorService()
				{
				   $this->indicadorBusiness = new IndicadorBusiness();
				}
				
				/**
				 * Pesquisa todas as instituições
				 * @return string
				 */
				public function findAll()
				{
					$indicadorBusiness = new IndicadorBusiness();
					$collection = $indicadorBusiness->findAll();
					echo json_encode($collection);
					return json_encode($collection);
				}	

		}

?>