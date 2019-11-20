

<?php





require_once("Db/db.php"); //Se incluye el archivo que contiene la conexión a la BD
//Verificando controladores
// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
//si la variable controller y action son pasadas por la url desde layout.php entran en el if

if (isset($_GET['controller']) && isset($_GET['action'])) { // Si hay un controlador y acción (método) definido...
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else { //Si no se ha definido un controlador y acción (caso cuando se accede la primera vez en la sesión)
    $controller = 'Home';
    $action = 'index';
}


//carga la vista layout.php
require_once('views/layouts/layout.php');




?>