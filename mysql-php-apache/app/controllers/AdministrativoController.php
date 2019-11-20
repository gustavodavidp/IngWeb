<?php 
/**
* 
*/
require_once('models/AdministrativoModel.php');

class AdministrativoController
{

	function __construct()
	{

	}

	function index(){
		$administrativo = new AdministrativoModel();
		$datos = $administrativo->listar();
		require_once('Views/Administrativo/index.php');
	}

}