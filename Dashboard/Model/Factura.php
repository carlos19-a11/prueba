<?php

/**
 * 
 */
class Factura
{
	private $id;
	private $nombre;
	private $urlFile;
	private $fecha;



	function __construct($id, $nombre, $urlFile, $fecha)
	{
		$this->setId($id);
		$this->setNombre($nombre);
		$this->setUrlFile($urlFile);
		$this->setFecha($fecha);
	}


	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	
	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	
	public function getUrlFile()
	{
		return $this->urlFile;
	}

	public function setUrlFile($urlFile)
	{
		$this->urlFile = $urlFile;
	}

	
	public function getFecha()
	{
		return $this->fecha;
	}

	public function setFecha($fecha)
	{
		$this->fecha = $fecha;
	}

	


	public static function allFactura()
	{
		$db = Db::getConnect();
		$listaFacturas = [];

		$select = $db->query('SELECT * FROM facturas ');

		foreach ($select->fetchAll() as $factura) {
			$listaFacturas[] = new Factura($factura['id_factura'], $factura['nombre'], $factura['url'], $factura['fecha']);
		}
		return $listaFacturas;
	}

	public static function searchById($id)
	{
		$db = Db::getConnect();
		$select = $db->prepare('SELECT * FROM alumno WHERE id=:id');
		$select->bindValue('id', $id);
		$select->execute();

		$alumnoDb = $select->fetch();


		$alumno = new Admin($alumnoDb['id'], $alumnoDb['nombres'], $alumnoDb['apellidos'], $alumnoDb['estado']);
		//var_dump($alumno);
		//die();
		return $alumno;
	}

	public static function update($alumno)
	{
		$db = Db::getConnect();
		$update = $db->prepare('UPDATE alumno SET nombres=:nombres, apellidos=:apellidos, estado=:estado WHERE id=:id');
		$update->bindValue('nombres', $alumno->getNombres());
		$update->bindValue('apellidos', $alumno->getApellidos());
		$update->bindValue('estado', $alumno->getEstado());
		$update->bindValue('id', $alumno->getId());
		$update->execute();
	}

	public static function delete($id)
	{
		$db = Db::getConnect();
		$delete = $db->prepare('DELETE  FROM alumno WHERE id=:id');
		$delete->bindValue('id', $id);
		$delete->execute();
	}
}
