
<?php
class Responsable{
    private $nombre;
    private $apellido;
    private $numEmpleado;
    private $numLicencia;

//setters   
    public function setNumLicencia($numLicencia){
        $this->numLicencia = $numLicencia;
    }
    public function setNumEmpleado($numEmpleado){
        $this->numEmpleado = $numEmpleado;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
//getters 
    public function getNombre(){
        return $this->nombre;
    } 
    public function getApellido(){
        return $this->apellido;
    } 
    public function getNumEmpl(){
        return $this->numEmpleado;
    }
    public function getNumLic(){
        return $this->numLicencia;
    }

	public function __construct($nombre,$apellido,$numEmpleado,$numLicencia)
	{
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numEmpleado = $numEmpleado;
		$this->numLicencia = $numLicencia;
	}

	public function __toString()
	{
		return ("\nNombre : ".$this->getNombre()."\n".
				"Apellido: ".$this->getApellido()."\n".
				"Numero de empleado: ".$this->getNumEmpl()."\n".
				"Numero de licencia: ".$this->getNumLic()."\n");
	}

}
?>
