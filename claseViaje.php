<?php

class Viaje{
  
  //Atrivutos
  private $codigo;
  private $destino;
  private $objPasajeros;
  private $canMax;
  private $objResponsableV;
  
  
  //Metodos
  public function __construct($codigo,$destino,$objPasajeros,$canMax,$objResponsableV){
    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->objPasajeros = $objPasajeros; 
    $this->canMax = $canMax;
    $this->objResponsableV = $objResponsableV;
  }
  public function getCodigo(){
    return $this->codigo;
  }
  public function getDestino(){
    return $this->destino;
  }
  public function getObjPasajeros(){
    return $this->objPasajeros;
  }
  public function getCanMax(){
    return $this->canMax;
  }
  public function getObjResponsableV(){
    return $this->objResponsableV;
  }
  public function setCodigo($codigo){
     $this->codigo = $codigo;
  }
  public function setDestino($destino){
     $this->destino = $destino;
  }
  public function setObjPasajeros($objPasajeros){
     $this->objPasajeros = $objPasajeros;
  }
  public function setObjResponsableV($objResponsableV){
    $this->objResponsableV=$objResponsableV;
  }
  public function setCanMax($canMax){
    return $this->canMax = $canMax;
  }

  public function __toString(){
    return "DATOS DEL PASAJERO:".$this->getObjPasajeros()."/n".
    "El numero de codigo: ".$this->getCodigo()."\n".
    "\nEl destino es: ".$this->getDestino()."\n".
    "\nPasajeros son: ".$this->getCanMax()."\n".
    "\nResponsable del Viaje: ".$this->getObjResponsableV()."\n";
  }
}
?>
