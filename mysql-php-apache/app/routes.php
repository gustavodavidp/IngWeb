<?php 
	/**
	* Archivo que redirecciona al contenido que se va incrustar dentro de la header y el footer

	**/
 
	
	//Administrativos y docentes
	$controllers = array(
		'Usuario' => ['index']
		'Welcome' => ['index'],
		'Docente' => ['index', 'add', 'save'],
		'Administrativo' => ['index']
	);
	
	if (array_key_exists($controller, $controllers)) {
		if (in_array($action, $controllers[$controller])) {
			call($controller, $action);
		} else {
			call('Welcome', 'index');
		}
	} else {
		call('Welcome', 'index');
	}
	
	function call($controller, $action)
	{
	
		require_once('Controllers/' . $controller . 'Controller.php');
	
		switch ($controller) {
			case 'Usuario':
				$controller = new UsuarioController();
				break;
			case 'Welcome':
				$controller = new WelcomeController();
				break;
			case 'Docente':
	
				$controller = new DocenteController();
				break;
			case 'Administrativo':
				$controller = new AdministrativoController();
				break;
			default:
				# código...
				break;
		}
	
		$controller->{$action}();
	}
	

?>