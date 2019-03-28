<?php

require_once 'Conexion.php';

class Faq {

    private $idFaq;
    private $pregunta;
    private $respuesta;
    private $fecha;
   

    const TABLA = 'faq';
    
    public function __construct($pregunta=null, $respuesta=null, $fecha=null, $idFaq=null ) {
        
        $this->pregunta = $pregunta;
        $this->respuesta = $respuesta;
        $this->fecha = $fecha;
        $this->idFaq = $idFaq;
       
    }

    public function getIdFaq() {
        return $this->idFaq;
    }

    public function getPregunta() {
        return $this->pregunta;
    }

    public function getRespuesta() {
        return $this->respuesta;
    }

     public function getFecha() {
        return $this->fecha;
    }


    public function setPregunta($pregunta) {
        $this->pregunta = $pregunta;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idFaq) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET pregunta = :pregunta,
			respuesta = :respuesta, fecha = :fecha WHERE idFaq = :idFaq');
            $consulta->bindParam(':idFaq', $this->idFaq);
            $consulta->bindParam(':pregunta', $this->pregunta);
            $consulta->bindParam(':respuesta', $this->respuesta);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (pregunta, respuesta, fecha
            ) VALUES(:pregunta, :respuesta, :fecha)');
            $consulta->bindParam(':pregunta', $this->pregunta);
            $consulta->bindParam(':respuesta', $this->respuesta);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->execute();
            $this->idUsuario = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idFaq;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idFaq = :idFaq');
        $consulta->bindParam(':idFaq', $this->idFaq);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idFaq) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idFaq = :idFaq');
        $consulta->bindParam(':idFaq', $idFaq);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['pregunta'], $registro['respuesta'], $registro['fecha'],  $idFaq);
            
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
