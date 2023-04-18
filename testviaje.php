<?php
#Bustos Julian 
#leg: FAI-1807
#IPOO 2023 - TP 2 - ENTRGABLE
/**
 * @param int $codigoViaje
 * @param string $destino
 * @param int $cantMaximaPasajeros
 * @param int $cantPasajeros
 * @param bolean $vuelveMenu
 */
require_once('viaje.php');
require_once('Pasajero.php');
require_once('ResponsableV.php');

echo "------------------------------------\n";
echo "TRANSPORTE DE PASAJEROS VIAJE FELIZ \n";
echo "------------------------------------\n";

echo "Ingrese los siguientes datos:\n";
echo "----------------\n";
echo "Ingrese el código del viaje: \n";
$codigoViaje = trim(fgets(STDIN));
echo "Ingrese el destino: \n";
$destino = trim(fgets(STDIN));
echo "Ingrese la máxima cantidad de asientos: \n";
$cantMaximaPasajeros  = trim(fgets(STDIN));
echo "Ingrese la cantidad de pasajeros a viajar: \n";
$cantPasajeros  = trim(fgets(STDIN));

$objViaje = new viaje($codigoViaje, $destino, $cantMaximaPasajeros);
//Nuevo Objeto pasjero

$vuelveMenu = true;

//Funcion Menu para el user
function menu(){
    return $menu = "Elija una opción:\n
    1. Modificar el código del viaje.\n
    2. Modificar el destino del viaje.\n
    3. Agregar responsable.\n
    4. Agregar un pasajero. \n
    5. Quitar un pasajero. \n
    6. Modificar datos del pasajero. \n
    7. Ver viaje. \n
    8. Salir. \n";
}
//Funcion que toma datos del pasajero
function tomarDatos(){
    echo "Nombre: \n";
    $nombre = trim(fgets(STDIN));
    echo "Apellido: \n";
    $apellido = trim(fgets(STDIN));
    echo "DNI: \n";
    $dni = trim(fgets(STDIN));
    echo "Numero de telefono: \n";
    $numTelefono =trim(fgets(STDIN));
    $pasajero = ['nombre'=>$nombre, 'apellido'=>$apellido, 'DNI'=>$dni,'Telefono'=>$numTelefono];
    return $pasajero;
}

do{
    echo menu();
    $opcion = trim(fgets(STDIN));
    switch ($opcion) {
        case '1':
            echo "Ingrese el actual codigo del vaje: {$objViaje->getCodigo ($codigoViaje)}. \n";
            echo "Ingrese el nuevo código: \n";
            $codigo = trim(fgets(STDIN));
            $codigo = intval($codigoViaje);
            $objViaje->setCodigo($codigoViaje);
            break;

        case '2':
            echo "El viaje tiene como destino la ciudad de: {$objViaje->getDestino($destino)}. \n";
            echo "Ingrese el nuevo destino: \n";
            $destino = trim(fgets(STDIN));
            $objViaje->setDestino($destino);
            break;
        
        case '3':
            echo "Ingrese el número de empleado: ";
                $numEmpleado = trim(fgets(STDIN));
                echo "Ingrese el número de licencia: ";
                $NumLicencia = trim(fgets(STDIN));
                echo "Ingrese el nombre del responsable: ";
                $nombreR = trim(fgets(STDIN));
                echo "Ingrese el apellido del responsable: ";
                $apellidoR = trim(fgets(STDIN));
                // Se crea objeto Responsable
                $responsable = new ResponsableV($numEmpleado, $NumLicencia, $nombreR, $apellidoR);
                $viaje->setResponsable($responsable);
                echo "Responsable modificado correctamente.\n";
            break;

        case '4':
            
            echo "\nIngrese el numero del responsable: ";
            $numResponsable = trim(fgets(STDIN));
            echo "\nIngrese el numero de licencia del responsable: ";
            $numLicencia = trim(fgets(STDIN));
            echo "\nIngrese el nombre del responsable: ";
            $nombreR = trim(fgets(STDIN));
            echo  "\nIngrese el apellido del responsable: ";
            $apellidoR= trim(fgets(STDIN));
            new ResponsableV($numResponsable,$numLicencia,$nombreR,$apellidoR);
            break;

        case '5':
            function crearArregloPasajeros($cantMaximaPasajeros){
                $cantidadPasajeros=haylugar($cantMaximaPasajeros);
                $numPasajero=0;
                $arregloPasajeros = array() ;
                do{
                   
                   $documento = validacionRepetidos($arregloPasajeros,$numPasajero);
                   echo "\nIngrese el nombre del pasajero número ". ($numPasajero+1) . " : ";
                   $nombre = trim(fgets(STDIN));
                   echo "\nIngrese el apellido del pasajero número " .($numPasajero+1) . " : ";
                   $apellido = trim(fgets(STDIN));
                   echo "\nIngrese el número de telefono del pasajero". ($numPasajero+1). " : ";
                   $telefono = trim(fgets(STDIN));
                   //Asignamos los datos al numero ingresado por parametro
                   $arregloPasajeros[$numPasajero]= new Pasajero($nombre,$apellido,$documento,$telefono);
                   $numPasajero++;
                }while($numPasajero<$cantidadPasajeros);
               
                return $arregloPasajeros;
            }
         break;

        case '5':
            echo "Ingrese los datos del pasajero a quitar: \n";
            $pasajero = tomarDatos();
            if($objViaje->quitarPasajero($pasajero)){
                echo "El pasajero se ha quitado con exito.\n";
            }else{
                echo "No se ha encontrado al pasajero, vuelva a intentarlo! .\n";
            }
            break;

        case '6':
             // Se piden los datos al usuario
             echo "Ingrese el número de documento del pasajero que desea cambiar: ";
             $documentoPas = trim(fgets(STDIN));
             // Modifica los datos del pasajero en caso de encontrarlo
             if ($viaje->modificarPasajero("", "", $documentoPas , 0) == false) {
                 echo "No hay ningún pasajero con el documento N°" . $documentoP . "\n";
             } else {
                 echo "Ingrese el nuevo nombre del pasajero: ";
                 $nombrePas = trim(fgets(STDIN));
                 echo "Ingrese el nuevo apellido del pasajero: ";
                 $apellidoPas = trim(fgets(STDIN));
                 echo "Ingrese el nuevo teléfono del pasajero: ";
                 $telefonoPas = trim(fgets(STDIN));
                 $viaje->modificarPasajero($nombrePas, $apellidoPas, $documentoPas, $telefonoPas);
                 echo "Pasajero modificado correctamente.\n";
             }
            break;

        case '7':
            echo $objViaje;
            break;

        default:
            $vuelveMenu = false;
            break;
    }

}while($vuelveMenu);