<?php 


$controllers=array(
	'Admin'=>['index','savefacturas', 'consultarfactura', 'AuthLogin']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('Admin','error');
	}		
}else{
	call('Admin','error');
}

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'Admin':
		require_once('Model/Admin.php');
		require_once('Model/Factura.php');
		$controller= new AdminController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>