<?php

require_once 'Conexion.php';

class Comentario {

    private $idComentario;
    private $email;
    private $mensaje;
    private $fecha;
    private $status;

    const TABLA = 'comentario';
    
    public function __construct($email=null, $mensaje=null, $fecha=null, $status=null, $idComentario=null ) {
        
        $this->email = $email;
        $this->mensaje = $mensaje;
        $this->fecha = $fecha;
        $this->status = $status;
        $this->idComentario = $idComentario;
       
    }

    public function getIdComentario() {
        return $this->idComentario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

     public function getFecha() {
        return $this->fecha;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idComentario) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET email = :email,
			mensaje = :mensaje, fecha = :fecha, status = :status WHERE idComentario = :idComentario');
            $consulta->bindParam(':idComentario', $this->idComentario);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':mensaje', $this->mensaje);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->bindParam(':status', $this->status);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (email, mensaje, fecha,
			status) VALUES(:email, :mensaje, :fecha, :status)');
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':mensaje', $this->mensaje);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->bindParam(':status', $this->status);
            $consulta->execute();
            $this->idComentario = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idComentario;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idComentario = :idComentario');
        $consulta->bindParam(':idComentario', $this->idComentario);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idComentario) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idComentario = :idComentario');
        $consulta->bindParam(':idComentario', $idComentario);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['email'], $registro['mensaje'], $registro['fecha'], $registro['status'], $idComentario);
            
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
