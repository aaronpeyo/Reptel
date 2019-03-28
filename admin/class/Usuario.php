<?php

require_once 'Conexion.php';

class Usuario {

    private $idUsuario;
    private $email;
    private $password;
    private $estatus;
    private $privilegios;

    const TABLA = 'usuario';
    
    public function __construct($email=null, $password=null, $estatus=null, $privilegios=null, $idUsuario=null ) {
        
        $this->email = $email;
        $this->password = $password;
        $this->estatus = $estatus;
        $this->privilegios = $privilegios;
        $this->idUsuario = $idUsuario;
       
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

     public function getEstatus() {
        return $this->estatus;
    }

    public function getPrivilegios() {
        return $this->privilegios;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    public function setPrivilegios($privilegios) {
        $this->privilegios = $privilegios;
    }
    

    public function guardar() {
        $conexion = new Conexion();
        if ($this->idUsuario) /* Modifica */ {
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET email = :email,
			password = :password, estatus = :estatus, privilegios = :privilegios WHERE idUsuario = :idUsuario');
            $consulta->bindParam(':idUsuario', $this->idUsuario);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':privilegios', $this->privilegios);
            $consulta->execute();
        } else /* Inserta */ {
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (email, password, estatus,
			privilegios) VALUES(:email, :password, :estatus, :privilegios)');
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':privilegios', $this->privilegios);
            $consulta->execute();
            $this->idUsuario = $conexion->lastInsertid();
        }
        $conexion = null;
    }
    
    public function eliminar(){
        echo $this->idContacto;
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE idUsuario = :idUsuario');
        $consulta->bindParam(':idUsuario', $this->idUsuario);
        $consulta->execute();
        $conexion = null;
    }

    public static function buscarPorid($idUsuario) {

        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE idUsuario = :idUsuario');
        $consulta->bindParam(':idUsuario', $idUsuario);
        $consulta->execute();
        $registro = $consulta->fetch();
        //print_r($registro);
        $conexion = null;
        if ($registro) {
            return new self($registro['email'], $registro['password'], $registro['estatus'], $registro['privilegios'], $idUsuario);
            
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



    public function logIn(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT email, privilegios FROM ' . self::TABLA . ' WHERE email = :email and password=:password');
        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':password', $this->password);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro) {
           $_SESSION['email'] = $registro[0];
           $_SESSION['privilegios'] = $registro[1];
            return true;
        } else {
            return false;
        }
    }

}
