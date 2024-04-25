<?php


$controllers=array(
	'Dashboard'=>['Inicio']
);

echo '$controller';
echo $controller;
die();

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} else {
		call('Dashboard', 'error');
	}
} else {
	call('Dashboard', 'error');
}

function call($controller, $action)
{
	require_once('Controllers/' . $controller . 'Controller.php');

	switch ($controller) {
		case 'Dashboard':
			$controller = new DashboardController();
			break;
		default:
			# code...
			break;
	}
	$controller->{$action}();
}
