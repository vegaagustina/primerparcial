<?php
//Desarrollo primer parcial 
//Un aeropuerto desea guardar y gestionar los vuelos que arriban y parten de las diferentes aerolíneas. 
//El aeropuerto guarda la colección de aerolíneas, las cuales administran los diferentes vuelos que ofrecen, a diferentes destinos.

//1. clase Persona
class Persona {
    //atributos
    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;

    //metodo constructor
    public function __construct($nombre, $apellido, $direccion, $mail, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
    }

    //metodos de acceso
    //getters
    public function getNombre () { return $this ->nombre;}
    public function getApellido () { return $this ->apellido;}
    public function getDireccion () { return $this ->direccion;}
    public function getMail () { return $this ->mail;}
    public function getTelefono () { return $this ->telefono;}

    //setters
    public function setNombre($nombre) { $this ->nombre = $nombre;}
    public function setApellido($apellido) { $this ->apellido = $apellido;}
    public function setDireccion($direccion) { $this ->direccion = $direccion;}
    public function setMail($mail) { $this ->mail = $mail;}
    public function setTelefono($telefono) { $this ->telefono = $telefono;}


    //metodo toString
    public function __toString(){
        return ("Persona: ".$this->nombre."\n".$this->apellido."\n".$this->direccion."\n".$this->mail."\n".$this->telefono."\n");
    }

}


//creo la clase Vuelo
class Vuelo {
    //atributos
    private $numero;
    private $fecha;
    private $destino;
    private $hrArribo;
    private $hrPartida;
    private $cantAsientosTotales;
    private $cantAsientosDisp;
    private $objPersona;


    //metodo constructor 
    public function __construct($numero, $fecha, $destino, $hrArribo, $hrPartida, $cantAsientosTotales, $cantAsientosDisp, $objPersona){
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->destino = $destino;
        $this->hrArribo = $hrArribo;
        $this->hrPartida = $hrPartida;
        $this->cantAsientosTotales = $cantAsientosTotales;
        $this->cantAsientosDisp = $cantAsientosDisp;
        $this->objPersona = $objPersona;
    }

    //metodos de acceso
    //getters
    public function getNumero () { return $this ->numero;}
    public function getFecha () { return $this ->fecha;}
    public function getDestino () { return $this ->destino;}
    public function getHrArribo () { return $this ->hrArribo;}
    public function getHrPartida() { return $this ->hrPartida;}
    public function getCantAsientosTotales () { return $this ->cantAsientosTotales;}
    public function getCantAsientosDisp () { return $this ->cantAsientosDisp;}
    public function getObjPersona () { return $this ->objPersona;}

    //setters
    

}

?>