
<?php $metaTags = 'tag1 tag2'; ?>
<?php

//Verificando controladores
// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
//si la variable controller y action son pasadas por la url desde layout.php entran en el if
if (isset($_GET['controller'])&&isset($_GET['action'])) {
	$controller=$_GET['controller'];
	$action=$_GET['action'];
} else {
	$controller='usuario';
	$action=index;
}	
//carga la vista layout.php
require_once('views/layouts/layout.php');



$conn = new mysqli("mysql", "root", "clave123", "mi_db");
// Verifica conexión
if ($conn->connect_error) {
	die("La conexión falló: " . $conn->connect_error);
}else echo "Conexión exitosa";

$sql = "SELECT nombre FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// Datos de salida de cada registro
	while($row = $result->fetch_assoc()) {
		echo $row['nombre']."<br>";
	}
} else {
	echo "Ningún resultado para la tabla usuarios";
}
$conn->close();
?>