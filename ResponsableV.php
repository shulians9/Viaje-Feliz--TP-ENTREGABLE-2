<?php
class ResponsableV {
        private $numeroDeEmpleado;
        private $numeroDeLicencia;
        private $nombre;
        private $apellido;

public function __construc ($numDeEmpleado,$numDeLicencia,$nombreEmpleado,$apellidoEmpleado){
    $this-> numeroDeEmpleado =$numDeEmpleado;
    $this-> numDeLicencia = $numDeLicencia;
    $this-> nombreEmpleado = $nombreEmpleado;
    $this-> apellidoEmpleado = $apellidoEmpleado;
}
//Metodos de acceso Numero del responsable
public function setNumeroDeEmpleado (){
    $this-> numeroDeEmpleado =$numDeEmpleado;
 }

 public function getNumeroDeEmpleado (){
    return   $this-> numeroDeEmpleado =$numDeEmpleado;
 }
//Metodo de acceso numero de licencia  del responsable
 public function setNumDeLicencia (){
    $this-> numDeLicencia = $numDeLicencia;
}
public function getNumDeLicencia (){
    return $this-> numDeLicencia = $numDeLicencia;
}
//Metodo de acceso Nombre del responsable
public function setNombreEmpleado (){
    $this-> nombreEmpleado = $nombreEmpleado;
}
public function getNombreEmpleado (){
    return $this-> nombreEmpleado = $nombreEmpleado;
 }
//Metodo de acceso apellido del responsable
public function setApellidoEmpleado (){
    $this-> apellidoEmpleado = $apellidoEmpleado;
}
public function getApellidoEmpleado (){
    return $this-> apellidoEmpleado = $apellidoEmpleado;
}
/** Método toString, muestra los datos del representante del viaje
     * @return STRING
     */
public function __toString (){
    return "El empleado responsable es: ".$this->getNombreR()." ".$this->getApellidoR().
    ",Numero de empleado ".$this->getNumEmpleado().", número de licencia ".$this->getTelefono();
}


}
?>