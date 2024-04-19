<?php 
/**
* 
*/
class HomeController
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



	function register(){
		require_once('Views/Home/register.php');
	}

	function save(){
		if (!isset($_POST['estado'])) {
			$estado="of";
		}else{
			$estado="on";
		}
		$alumno= new Usuarios(null, $_POST['nombres'],$_POST['apellidos'],$estado);

		Usuarios::save($alumno);
		$this->show();
	}

	function show(){
		$listaAlumnos=Usuarios::all();

		require_once('Views/Home/show.php');
	}

	function updateshow(){
		$id=$_GET['idAlumno'];
		$alumno=Usuarios::searchById($id);
		require_once('Views/Home/updateshow.php');
	}

	function update(){
		$alumno = new Usuarios($_POST['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['estado']);
		Usuarios::update($alumno);
		$this->show();
	}
	function delete(){
		$id=$_GET['id'];
		Usuarios::delete($id);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id'])) {
			$id=$_POST['id'];
			$alumno=Usuarios::searchById($id);
			$listaAlumnos[]=$alumno;
			//var_dump($id);
			//die();
			require_once('Views/Home/show.php');
		} else {
			$listaAlumnos=Usuarios::all();

			require_once('Views/Home/show.php');
		}
		
		
	}

	function error(){
		require_once('Views/Home/error.php');
	}

}

?>