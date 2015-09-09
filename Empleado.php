<?php
include "Persona.php";
class Empleado extends Persona
{
	private $_legajo;
	private $_Sueldo;
	public function __construct($nom,$ape,$dni,$sexo,$leg,$sueldo)
	{
		parent::__construct($nom,$ape,$dni,$sexo);
		$this->_legajo=$leg;
		$this->_Sueldo=$sueldo;
	}
	public function GetLegajo()
	{
		return $this->_legajo;
	}
	public function GetSueldo()
	{
		return $this->_Sueldo;
	}
	public function SetLegajo($aux)
	{
		$this->_legajo=$aux;
	}
	public function SetSueldo($aux1)
	{
		$this->_Sueldo=$aux1;
	}
	public function ToString()
	{
		$MostrarPadre= parent::ToString();
		return $MostrarPadre."-".$this->_legajo."-".$this->_Sueldo."\r\n";
	}

	public function Hablar($idioma)
	{
		return $idioma;		
	}
}

?>