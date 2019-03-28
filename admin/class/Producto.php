<?php

require_once 'Conexion.php';

class Producto {

    private $idProducto;
    private $idCategoria;
    private $url;
    private $nombreProducto;
    private $precio;
    private $stock;
    private $descripcion;

    const TABLA = 'productos';
    
    public function __construct ($idCategoria=null, $url=null, $nombreProducto=null, $precio=null,$stock=null,$descripcion=null,$idProducto=null ) {
        
        $this->idProducto = $idProducto;
        $this->idCategoria = $idCategoria;
        $this->url = $url;
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->descripcion = $descripcion;

    }

    public function getIdProducto() {
        return $this->idProducto;
    }
    public function getIdCategoria() {
        return $this->idCategoria;
    }
    public function getUrl() {
        return $this->url;
    }
    public function getNombreProducto() {
        return $this->nombreProducto;
    }
    public function getPrecio() {
        return $this->precio;
    }
    public function getStock() {
        return $this->stock;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setIdProducto($idProducto) {
        $this->idProducto = $idProducto;
    }

    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function setNombreProducto($nombreProducto) {
        $this->nombreProducto = $nombreProducto;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idProducto) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET idCategoria = :idCategoria,
            url = :url, nombreProducto = :nombreProducto, precio = :precio, stock = :stock, descripcion = :descripcion WHERE idProducto = :idProducto');
            $consulta->bindParam(':idProducto', $this->idProducto);
            $consulta->bindParam(':idCategoria', $this->idCategoria);
            $consulta->bindParam(':url', $this->url);
            $consulta->bindParam(':nombreProducto', $this->nombreProducto);
            $consulta->bindParam(':precio', $this->precio);
            $consulta->bindParam(':stock', $this->stock);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (idCategoria, url, nombreProducto,
			precio, stock, descripcion) VALUES(:idCategoria, :url, :nombreProducto, :precio, :stock, :descripcion)');
            $consulta->bindParam(':idCategoria', $this->idCategoria);
            $consulta->bindParam(':url', $this->url);
            $consulta->bindParam(':nombreProducto', $this->nombreProducto);
            $consulta->bindParam(':precio', $this->precio);
            $consulta->bindParam(':stock', $this->stock);
            $consulta->bindParam(':descripcion', $this->descripcion);
            $consulta->execute();
            $this->idProducto = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idProducto;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idProducto = :idProducto');
        $consulta->bindParam(':idProducto', $this->idProducto);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idProducto) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idProducto = :idProducto');
        $consulta->bindParam(':idProducto', $idProducto);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['idCategoria'], $registro['url'], $registro['nombreProducto'], $registro['precio'], 
            $registro['stock'], $registro['descripcion'], $idProducto);
            
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
