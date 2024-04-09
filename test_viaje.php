<?php
include_once "Viaje.php";
include_once "Pasajero.php";
include_once "ResponsableV.php";
/**
 * Implementar un script testViaje.php que cree una instancia de la clase Viaje 
 * y presente un menú que permita cargar la información del viaje, modificar y ver sus datos.
 */

/**
 * Una funcion que retorna los datos de un menu
 * @return string
 */
function mostrarMenuViaje() {
    $menu = 
    "MENU DE VIAJE\n" .
    "1. Cargar informacion del viaje\n" .
    "2. Modificar el codigo de viaje\n" .
    "3. Modificar el destino\n" .
    "4. Modificar la cantidad de pasajeros\n" .
    "5. Ver los datos del vuelo\n" .
    "6. Modificar un pasajero\n" .
    "0. Salir\n" .
    "Seleccione una opcion: ";
    return $menu;
}
function menuPrincipal(){
    $menuTipo = 
    "MENU PRINCIPAL:\n" .
    "1. Cargar informacion del viaje\n" .
    "2. Agregar/Modificar pasajeros\n" .
    "3. Agregar/Modificar responsable de vuelo\n".
    "0. Salir\n";
    return $menuTipo;
}
// Ciclo principal del menu interactivo

// Creacion objetos de prueba
 $responsable = new ResponsableV(20,3004,"jorge","perez");
  $viaje = new Viaje(2305,"Neuquen",100,$responsable);
//  echo $viaje->agregarPasajero($pasajero2);
//  $viaje->verPasajeros();
//  echo $pasajero;
// echo $viaje;
do {
    echo "\n";
    echo menuPrincipal();
    $tipoMenu=trim(fgets(STDIN));
   
    if($tipoMenu==1){
        echo mostrarMenuViaje();
        $opcion=trim(fgets(STDIN));
    switch ($opcion) {
        case 0:
            echo "Saliendo...";
            break;
        case 1:
            echo "Ingrese el codigo del viaje: ";
            $codigo = trim(fgets(STDIN));
            echo "Ingrese el destino del viaje: ";
            $destino = trim(fgets(STDIN));
            echo "Ingrese la cantidad maxima de pasajeros: ";
            $cantPasajero = trim(fgets(STDIN));
          $viaje= new Viaje($codigo,$destino,$cantPasajero,$pasajero,$responsable);
          echo "Se ha creado el viaje .\n";
            break;
        case 2:
            echo "Ingrese el nuevo codigo del viaje: ";
            $codigo = trim(fgets(STDIN));
            $viaje->setCodigo($codigo);
            echo "Se ha cambiado el destino.\n";
            break;
        case 3:
            echo "Ingrese el nuevo destino: ";
            $destino = trim(fgets(STDIN));
            $viaje->setDestino($destino);
            echo "Se modifico el destino del viaje.\n";
            break;
        case 4:
            echo "Ingrese la nueva cantidad maxima de pasajeros: ";
            $cantPasajero = trim(fgets(STDIN));
            $viaje->setMaxPasajero($cantPasajero);
            echo "Se modifico la cantidad maxima de pasajeros.\n";
            break;
        case 5:
            echo $viaje."\n";
            break;

       
        default:
            echo "Opcion invalida";
            break;
    }
    }
    if($tipoMenu==2){
        echo $menuPasajero=
        "MENU DE PASAJEROS\n" .
        "1. Cargar Pasajero\n" .
        "2. Modificar Pasajero\n". 
        "3. Ver lista de pasajeros\n";
        $menuPasajero=trim(fgets(STDIN));
        switch ($menuPasajero) {
            case 1:
                echo "Ingrese el nombre del nuevo pasajero: ";
                $nombre = trim(fgets(STDIN));
                echo "Ingrese el apellido del nuevo pasajero: ";
                $apellido = trim(fgets(STDIN));
                echo "Ingrese su numero de documento: ";
                $documento=trim(fgets(STDIN));
                echo "Ingrese el teléfono del nuevo pasajero: ";
                $telefono = trim(fgets(STDIN));
                $nuevoPasajero = new Pasajero($nombre, $apellido,$documento, $telefono);
                if($viaje->agregarPasajero($nuevoPasajero)) {
                    echo "Pasajero agregado";
                }else{
                    echo "No se puede agregar pasajero";
                }
                break;
            case 2:
                echo "Ingrese el índice del pasajero que desea modificar: ";
                $indicePasajero = trim(fgets(STDIN));
                echo "Ingrese el nuevo nombre del pasajero: ";
                $nuevoNombre = trim(fgets(STDIN));
                echo "Ingrese el nuevo apellido del pasajero: ";
                $nuevoApellido = trim(fgets(STDIN));
                echo "Ingrese el nuevo numero de documento: ";
                $nuevoDocumento=trim(fgets(STDIN));
                echo "Ingrese el nuevo teléfono del pasajero: ";
                $nuevoTelefono = trim(fgets(STDIN));
                $viaje->modificarPasajero($indicePasajero, $nuevoNombre,$nuevoDocumento, $nuevoApellido, $nuevoTelefono);
               
                break;
            case 3:
                echo $viaje->verPasajeros();
            
            default:
                echo "Opcion invalida";
                break;
        }
   
    }
    if ($tipoMenu==3) {
        echo $menuResponsableVuelo=
        "MENU DE RESPONSABLE DE VUELO\n" .
        "1. Cargar Responsable de vuelo\n" .
        "2. Modificar Responsable de vuelon\n";
        $opcionResponsable=trim(fgets(STDIN));
        switch ($opcionResponsable) {
            case 1:
                echo "Ingrese el numero de empleado: ";
                $numEmpleado= trim(fgets(STDIN));
                echo "Ingrese el numero de licencia: ";
                $numLicencia = trim(fgets(STDIN));
                echo "Ingrese el nombre: ";
                $nombreResponsableV=trim(fgets(STDIN));
                echo "Ingrese el apellido: ";
                $apellidoResponsableV = trim(fgets(STDIN));
                $responsableV= new ResponsableV($numEmpleado,$numLicencia,$nombreResponsableV,$apellidoResponsableV);
                break;
            case 2:
                echo "Ingrese el numero de empleado: ";
                $numEmpleado= trim(fgets(STDIN));
                echo "Ingrese el numero de licencia: ";
                $numLicencia = trim(fgets(STDIN));
                echo "Ingrese el nombre: ";
                $nombreResponsableV=trim(fgets(STDIN));
                echo "Ingrese el apellido: ";
                $apellidoResponsableV = trim(fgets(STDIN));
                $responsableV=new ResponsableV($numEmpleado,$numLicencia,$nombreResponsableV,$apellidoResponsableV);
            default:
             echo "Opcion invalida";
                break;
        }
  
    }
} while ($tipoMenu !=0);
