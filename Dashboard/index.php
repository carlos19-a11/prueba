<?php
require_once('connection.php');

require_once('config.php');

// if (isset($_GET['controller'])&&isset($_GET['action'])) {

// 	$controller=$_GET['controller'];
// 	$action=$_GET['action'];
// }else{
// 	$controller='Home';
// 	$action='index';
// }
// require_once('Views/Layouts/layout.php');	


// Definir valores predeterminados para el controlador y la acción
// Definir valores predeterminados para el controlador y la acción
$controller = 'Home';
$action = 'index';

// Verificar si se proporciona un controlador y una acción
if (isset($_GET['controller']) && isset($_GET['action'])) {
    // Obtener el controlador y la acción de la solicitud
    $controller = $_GET['controller'];
    $action = $_GET['action'];

    // Verificar si se solicita el panel de administración
    if ($controller == 'Dashboard' && $action == 'index') {
        // Incluir el layout específico para el panel de administración
        require_once('Views/Dashboard/Layouts/layout.php');
    } else {
        require_once('Views/Layouts/layout.php');
    }
} else {
    require_once('Views/Layouts/layout.php');
}
