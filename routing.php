<?php


$controllers=array(
	'Home'=>['index','nosotros','experiencia','creg080','procedimeinto_sgc','pqr','consultar_facturaPage',]
	// 'Home'=>['index','register','save','show','updateshow','update','delete','search','error']
);

echo $controller;

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('Home', 'error');
	}
} else {
	call('Home', 'error');
}

function call($controller, $action)
{
	require_once('Controllers/' . $controller . 'Controller.php');

	switch ($controller) {
		case 'Home':
			require_once('Model/Usuarios.php');
			$controller = new HomeController();
			break;
		case 'Dashboard':
			$controller = new DashboardController();
			break;
		default:
			# code...
			break;
	}
	$controller->{$action}();
}
