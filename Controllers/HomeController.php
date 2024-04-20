<?php 
/**
* 
*/
class UsuarioController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('Views/Home/HomePage.php');
	}

	function nosotros(){
		require_once('Views/Home/NosotrosPage.php');
	}
	function experiencia(){
		require_once('Views/Home/ExperienciaPage.php');
	}
	function creg080(){
		require_once('Views/Home/CREG_080_de_2019Page.php');
	}
	function procedimeinto_sgc(){
		require_once('Views/Home/Procedimientos_SGCPage.php');
	}
	function pqr(){
		require_once('Views/Home/PQRPage.php');
	}
	function consultar_facturaPage(){
		require_once('Views/Home/consultar_facturaPage.php');
	}

	function register(){
		require_once('Views/Home/register.php');
	}

	function save(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$alumno= new Alumno(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Alumno::save($alumno);
		$this->show();
	}

	function show(){
		$listaAlumnos=Alumno::all();

		require_once('Views/Home/show.php');
	}

	function updateshow(){
		$id=$_GET['idAlumno'];
		$alumno=Alumno::searchById($id);
		require_once('Views/Home/updateshow.php');
	}

	function update(){
		$alumno = new Alumno($_POST['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['estado']);
		Alumno::update($alumno);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Alumno::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$alumno=Alumno::searchById($id);
			$listaAlumnos[]=$alumno;
			//var_dump($id);
			//die();
			require_once('Views/Home/show.php');
		} else {
			$listaAlumnos=Alumno::all();

			require_once('Views/Home/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Home/error.php');
	}

}

?>