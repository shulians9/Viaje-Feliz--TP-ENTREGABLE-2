<?php
class Pasajero {
        private $nombrePasajero;
        private $apellidoPasajero;
        private $numDocumentoPasajero;
        private $telefonoPasajero;

public function __construc ($nombreP,$apellidoP,$numDocPasajero,$telefonoP){
    $this-> nombreP = $nombreP;
    $this-> apellidoP = $apellidoP;
    $this-> numDocPasajero = $numDocPasajero;
    $this-> telefonoP = $telefonoP;
}

public function getNombrePasajero (){
    return $this-> nombreP = $nombreP;
}
public function setNombrePasajero (){
    $this-> nombreP = $nombreP;
}

public function getApellidoPasajero (){
    return  $this-> apellidoP = $apellidoP;
}
public function setApellidoPasajero (){
    $this-> apellidoP = $apellidoP;
}

public function getNumDocPasajero (){
    return $this-> numDocPasajero = $numDocPasajero;
}
public function setNumDocPasajero (){
    $this-> numDocPasajero = $numDocPasajero;
}

public function getTelefonoPasajero (){
    return $this-> telefonoP = $telefonoP;
}
public function setTelefonoPasajero (){
    $this-> telefonoP = $telefonoP;
}
/** Método toString, muestra los datos del pasajero
     * @return STRING
     */
public function __toString()
{
    return "\nNombre: ".$this->getNombre()."   Apellido: ".$this->getApellido()."\nNúmero de documento: ".$this->getDocumento()."\n Número de telefono: "
    .$this->getTelefono();
}

}
?>