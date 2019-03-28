<?php

require_once 'Conexion.php';

class Contacto {

    private $idContacto;
    private $nombre;
    private $email;
    private $numero;
    private $mensaje;

    const TABLA = 'contacto';
    
    public function __construct($nombre=null, $email=null, $numero=null, $mensaje=null, $idContacto=null ) {
        
        $this->nombre = $nombre;
        $this->email = $email;
        $this->numero = $numero;
        $this->mensaje = $mensaje;
        $this->idContacto = $idContacto;
       
    }

    public function getIdContacto() {
        return $this->idContacto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

     public function getNumero() {
        return $this->numero;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setIdContacto($idContacto) {
        $this->idContacto = $idContacto;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }
    

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idContacto) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre,
			email = :email, numero = :numero, mensaje = :mensaje WHERE idContacto = :idContacto');
            $consulta->bindParam(':idContacto', $this->idContacto);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':mensaje', $this->mensaje);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, email, numero,
			mensaje) VALUES(:nombre, :email, :numero, :mensaje)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':numero', $this->numero);
            $consulta->bindParam(':mensaje', $this->mensaje);
            $consulta->execute();
            $this->idContacto = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idContacto;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idContacto = :idContacto');
        $consulta->bindParam(':idContacto', $this->idContacto);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idContacto) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idContacto = :idContacto');
        $consulta->bindParam(':idContacto', $idContacto);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['nombre'], $registro['email'], $registro['numero'], $registro['mensaje'], $idContacto);
            
        } else {
            return false;
            
        }
    }

    public static function recuperarTodos() {
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        return $registros;
    }



   

}
