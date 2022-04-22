<?php
class Pasajero{
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;

    //setters 
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    public function setDocumento($documento){
        $this->documento = $documento;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }


	//getters
    public function getDocumento(){
        return $this->documento;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getApellido(){
        return $this->apellido;
    } 
    public function getNombre(){
        return $this->nombre;
    }
    public function __construct($nombre,$apellido,$documento,$telefono)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->documento = $documento;
        $this->telefono = $telefono;
    }

    public function __toString()
    {
        return ("El nombre del pasajero es: ".$this->getNombre()."\n".
                "El apellido del pasajero es: ".$this->getApellido()."\n".
                "El documento del pasajero es: ".$this->getDocumento()."\n".
                "El telefono del pasajero es: ".$this->getTelefono()."\n");
    }
    
}
?>
