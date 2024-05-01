<?php 
/**
* 
*/
class AdminController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Admin/Inicio.php');
	}

	function register(){
		require_once('Views/Admin/register.php');
	}
	function cosnultarfactura(){
		// die('AAAA');
		require_once('Views/Admin/consultafactura.php');
	}

	function save(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$alumno= new Admin(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Admin::save($alumno);
		$this->show();
	}

	function show(){
		$listaAlumnos=Admin::all();

		require_once('Views/Alumno/show.php');
	}

	function updateshow(){
		$id=$_GET['idAlumno'];
		$alumno=Admin::searchById($id);
		require_once('Views/Alumno/updateshow.php');
	}

	function update(){
		$alumno = new Admin($_POST['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['estado']);
		Admin::update($alumno);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Admin::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$alumno=Admin::searchById($id);
			$listaAlumnos[]=$alumno;
			//var_dump($id);
			//die();
			require_once('Views/Alumno/show.php');
		} else {
			$listaAlumnos=Admin::all();

			require_once('Views/Alumno/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Alumno/error.php');
	}

}

?>