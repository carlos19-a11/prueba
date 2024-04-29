<?php

/**
 * 
 */
require_once('connection.php');

class AdminController
{

	function __construct()
	{
	}

	function index()
	{
		require_once('Views/Admin/Inicio.php');
	}

	function savefacturas()
	{
		// die('AA');
		var_dump($_REQUEST);
		if (isset($_FILES['facturas']['name']) && !empty($_FILES['facturas']['name'][0])) {
			$files = $_FILES['facturas'];

			// Carpeta donde se guardarán las facturas
			$targetDirectory = "C:/xampp/htdocs/distriserviciosp/assets/facturas/";
			// $targetDirectory = BASE_URL."assets/facturas/";
			

			// echo ' $targetDirectory';
			// echo  $targetDirectory;

			// Iterar sobre cada archivo
			for ($i = 0; $i < count($files['name']); $i++) {
				$fileName = basename($files['name'][$i]);
				$targetPath = $targetDirectory . $fileName;
				echo '$targetPath';
				echo $files['tmp_name'][$i];
				// Mover el archivo a la carpeta de destino
				if (move_uploaded_file($files['tmp_name'][$i], $targetPath)) {
					echo "El archivo $fileName se ha subido correctamente.<br>";
					// Aquí puedes agregar código adicional, como insertar el nombre del archivo en una base de datos.
					$sql = "INSERT INTO nombre_de_tu_tabla (nombre_archivo) VALUES ('$fileName')";
					if ($conn->query($sql) === TRUE) {
						echo "Registro insertado correctamente en la base de datos.<br>";
					} else {
						echo "Error al insertar registro en la base de datos: " . $conn->error . "<br>";
					}
				} else {
					echo "Hubo un error al subir el archivo $fileName.<br>";
				}
			}

		} else {
			echo "Por favor, selecciona al menos un archivo para subir.";
		}
		// require_once('Views/Admin/register.php');
	}

	function register()
	{
		require_once('Views/Admin/register.php');
	}

	function save()
	{
		if (!isset($_POST['estado'])) {
			$estado = "of";
		} else {
			$estado = "on";
		}
		$alumno = new Admin(null, $_POST['nombres'], $_POST['apellidos'], $estado);

		Admin::save($alumno);
		$this->show();
	}

	function show()
	{
		$listaAlumnos = Admin::all();

		require_once('Views/Alumno/show.php');
	}

	function updateshow()
	{
		$id = $_GET['idAlumno'];
		$alumno = Admin::searchById($id);
		require_once('Views/Alumno/updateshow.php');
	}

	function update()
	{
		$alumno = new Admin($_POST['id'], $_POST['nombres'], $_POST['apellidos'], $_POST['estado']);
		Admin::update($alumno);
		$this->show();
	}
	function delete()
	{
		$id = $_GET['id'];
		Admin::delete($id);
		$this->show();
	}

	function search()
	{
		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$alumno = Admin::searchById($id);
			$listaAlumnos[] = $alumno;
			//var_dump($id);
			//die();
			require_once('Views/Alumno/show.php');
		} else {
			$listaAlumnos = Admin::all();

			require_once('Views/Alumno/show.php');
		}
	}

	function error()
	{
		require_once('Views/Alumno/error.php');
	}
}
