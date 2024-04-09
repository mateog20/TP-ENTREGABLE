<?php
/**
 * cree una clase ResponsableV que registre el número de empleado, número de licencia, nombre y apellid
 */
class ResponsableV{
    private $numEmpleado;
    private $numLicencia;
    private $nombre;
    private $apellido;
    //metodo construc
    public function __construct($pNumEmpleado,$pNumLicencia,$pNombre,$pApellido)
    {
        $this->numEmpleado=$pNumEmpleado;
        $this->numLicencia=$pNumLicencia;
        $this->nombre=$pNombre;
        $this->apellido=$pApellido;
    }
    //Metodos de acceso
    //GET
    public function getNumEmpleado()
    {
        return $this->numEmpleado;
    }
    public function getNumLicencia()
    {
        return $this->numLicencia;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    //SET
    public function setNumEmpleado($nEmpleado)
    {
        $this->numEmpleado=$nEmpleado;
    }
    public function setNumLicencia($nLicencia)
    {
        $this->numLicencia=$nLicencia;
    }
    public function setNombre($nNombre)
    {
        $this->nombre=$nNombre;
    }
    public function setApellido($nApellido)
    {
        $this->apellido=$nApellido;
    }
    //Metodo tostring
    public function __toString()
    {
        $mostrar=
        "Datos del responsable"."\n".
        "Nombre: ". $this->getNombre()."\n".
        "Apellido: ". $this->getApellido()."\n".
        "Numero Empleado: ". $this->getNumEmpleado()."\n".
        "Numero de licencia: ". $this->getNumLicencia();
        return $mostrar;
    }
}
