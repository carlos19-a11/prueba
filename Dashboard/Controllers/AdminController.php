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
	function AuthLogin()
	{
		echo 'A'; die();
		require_once('Views/Admin/login.php');
	}

	public static function savefacturas()
	{
		// Get the database connection
		$db = Db::getConnect();

		if (isset($_FILES['facturas']['name']) && !empty($_FILES['facturas']['name'][0])) {
			$files = $_FILES['facturas'];
			$targetDirectory = "c:/xampp/htdocs/distriserviciosp/assets/facturas/";
			$targetUrl = "localhost/distriserviciosp/assets/facturas/";

			// Iterate over each file
			for ($i = 0; $i < count($files['name']); $i++) {
				$fileName = basename($files['name'][$i]);
				$targetPath = $targetDirectory . $fileName;
				$targetUrlsave = $targetUrl . $fileName;

				// Move the file to the destination folder
				if (move_uploaded_file($files['tmp_name'][$i], $targetPath)) {
					// echo "El archivo $fileName se ha subido correctamente.<br>";

					// Insert the file name into the database
					$insert = $db->prepare('INSERT INTO facturas (nombre,url, fecha) VALUES (:fileName, :targetPath, NOW())');
					$insert->bindValue(':fileName', $fileName);
					$insert->bindValue(':targetPath', $targetUrlsave);

					if ($insert->execute()) {
						// echo "Registro insertado correctamente en la base de datos.<br>";
					} else {
						echo "Error al insertar registro en la base de datos: " . $insert->errorInfo()[2] . "<br>";
					}
				} else {
					echo "Hubo un error al subir el archivo $fileName.<br>";
				}
			}
		require_once('Views/Admin/Inicio.php');
		echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
		echo '<script>';
		echo 'Swal.fire({';
		echo '  title: "¡Buen trabajo!",';
		echo '  text: "¡Has subido y guardado las facturas exitosamente!",';
		echo '  icon: "success"';
		echo '});';
		echo '</script>';

		} else {
			// echo "Por favor, selecciona al menos un archivo para subir.";
			require_once('Views/Admin/Inicio.php');

			echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
echo '<script>';
echo 'Swal.fire({';
echo '  icon: "error",';
echo '  title: "¡Oops...",';
echo '  text: "¡Algo salió mal!",';
echo '  footer: \'<a href="#">¿Por qué tengo este problema?</a>\'';
echo '});';
echo '</script>';
		}
	}

	function register()
	{
		require_once('Views/Admin/register.php');
	}
	function consultarfactura(){
		// die('AAAA');
		$listaFactura = Factura::allFactura();
		require_once('Views/Admin/consultafactura.php');
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
