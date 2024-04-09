<?php
/**
 * Clase para almacenar informacion de un pasajero
 * Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.
 */
class Pasajero{
    private $nombre;
    private $apellido;
    private $numDocumento;
    private $telefono;
    //Construct
    public function __construct($pNombre,$pApellido,$pDni,$pTelefono)
    {
        $this->nombre=$pNombre;
        $this->apellido=$pApellido;
        $this->numDocumento=$pDni;
        $this->telefono=$pTelefono;
    }
    //Metodos de acceso
    //GET
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getDocumento()
    {
        return $this->numDocumento;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    //SET
    public function setNombre($nNombre)
    {
        $this->nombre=$nNombre;
    }
    public function setApellido($nApellido)
    {
        $this->apellido=$nApellido;
    }
    public function setDocumento($nDocumento)
    {
        $this->numDocumento=$nDocumento;
    }
    public function setTelefono($nTelefono)
    {
        $this->telefono=$nTelefono;
    }
    //Metodo __tostring
    public function __toString()
    {
        $mostrar=
        "Datos del pasajero"."\n".
        "Nombre: ". $this->getNombre()."\n".
        "Apellido: ". $this->getApellido()."\n".
        "Numero Documento: ". $this->getDocumento()."\n".
        "Telefono: ". $this->getTelefono();
        return $mostrar;
    }
}
