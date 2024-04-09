<?php
/**
 * ANOTACIONES 
 * De cada viaje se precisa almacenar el código del mismo, destino, cantidad máxima de pasajeros y los pasajeros del viaje.
 * El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero
 * La clase Viaje debe hacer referencia al responsable de realizar el viaje.
 */
class Viaje{

    private $codigo;
    private $destino;
    private $cantMaxPasajero;
    private $objPasajero;
    private $objResponsable;
    //Construct
    public function __construct($pCodigo,$pDestino,$pCantPasajero,$pObjResponsable)
    {
        $this->codigo=$pCodigo;
        $this->destino=$pDestino;
        $this->cantMaxPasajero=$pCantPasajero;
        $this->objPasajero=array();
        $this->objResponsable=$pObjResponsable;
    }
    //Metodos de acceso
    //GET
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getMaxPasajero()
    {
        return $this->cantMaxPasajero;
    }
    public function getPasajero()
    {
        return $this->objPasajero;
    }
    public function getResponsable()
    {
        return $this->objResponsable;
    }
    //SET
    public function setCodigo($nCodigo)
    {
        $this->codigo=$nCodigo;
    }
    public function setDestino($nDestino)
    {
        $this->destino=$nDestino;
    }
    public function setMaxPasajero($nMaxPasajero)
    {
        $this->cantMaxPasajero=$nMaxPasajero;
    }
    public function setPasajero($nPasajero)
    {
        $this->objPasajero[]=$nPasajero;
    }
    public function setResponsable($nResponsable)
    {
        $this->objResponsable=$nResponsable;
    }
    //Metodo __tostring
    public function __toString()
    {
     $mostrar=
     "Datos del vuelo "  ."\n". 
     "Codigo de vuelo: ". $this->getCodigo()."\n".
     "Destino: ". $this->getDestino()."\n".
     "Cantidad maxima de pasajeros: ". $this->getMaxPasajero()."\n";
     return $mostrar;
    }
    // Metodos de la clase
    public function agregarPasajero($objPasajeroAgregar)
    {
        $agregarPasajero=false;
        if (count($this->getPasajero()) < $this->getMaxPasajero() )
         {
            if (!$this->comprobarPasajero( $objPasajeroAgregar) )
             {
                $this->setPasajero($objPasajeroAgregar);
                $agregarPasajero=true;
            }
        }
        return $agregarPasajero;
    }
    public function verPasajeros() {
        echo "Pasajeros del viaje:\n";
        print_r($this->getPasajero());
    }
    public function modificarPasajero($index, $nuevoNombre,$nuevoApellido,$nuevoDocumento, $nuevoTelefono) {
        if ($index >= 0 && $index < count($this->getPasajero())) {
            $this->getPasajero()[$index]->setNombre($nuevoNombre);
            $this->getPasajero()[$index]->setApellido($nuevoApellido);
            $this->getPasajero()[$index]->setDocumento($nuevoDocumento);
            $this->getPasajero()[$index]->setTelefono($nuevoTelefono);
            echo "Pasajero modificado exitosamente.\n";
        } else {
            echo "Índice de pasajero no válido.\n";
        }
    }
    public function comprobarPasajero($objPasajeroComprobar)
    {
        $mismaPersona=false;
        foreach ($this->getPasajero() as $pasajero) {
            if ($pasajero->getDocumento() == $objPasajeroComprobar->getDocumento()) {
                $mismaPersona=true;
            }
    }
    return $mismaPersona;
}
public function modificarResponsableV($index, $nuevoEmpleado,$nuevaLic,$nuevoNombre, $nuevoApellido) 
{
    
     
        $this->getResponsable()->setNumEmpleado($nuevoEmpleado);
        $this->getResponsable()->setNumLicencia($nuevaLic);
        $this->getResponsable()->setNombre($nuevoNombre);
        $this->getResponsable()->setApellido($nuevoApellido);
        echo "Responsable de vuelo modificado exitosamente.\n";
    
}
}