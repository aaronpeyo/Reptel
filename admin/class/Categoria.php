<?php

require_once 'Conexion.php';

class Categoria {

    private $idCategoria;
    private $nombreCategoria;
    private $descripcion;
 

    const TABLA = 'categorias';
    
    public function __construct($nombreCategoria=null, $descripcion=null, $idCategoria=null ) {
        
        $this->nombreCategoria = $nombreCategoria;
        $this->descripcion = $descripcion;
        $this->idCategoria = $idCategoria;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }

    public function getNombreCategoria() {
        return $this->nombreCategoria;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }


    public function setNombreCategoria($nombreCategoria) {
        $this->nombreCategoria = $nombreCategoria;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idCategoria) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombreCategoria = :nombreCategoria,
			descripcion = :descripcion WHERE idCategoria = :idCategoria');
            $consulta->bindParam(':idCategoria', $this->idCategoria);
            $consulta->bindParam(':nombreCategoria', $this->nombreCategoria);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombreCategoria, descripcion) VALUES(:nombreCategoria, :descripcion)');
            $consulta->bindParam(':nombreCategoria', $this->nombreCategoria);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->execute();
            $this->idCategoria = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idCategoria;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idCategoria = :idCategoria');
        $consulta->bindParam(':idCategoria', $this->idCategoria);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idCategoria) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idCategoria = :idCategoria');
        $consulta->bindParam(':idCategoria', $idCategoria);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['nombreCategoria'], $registro['descripcion'], $idCategoria);
            
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
