<?php

class usuario {

    private $id;
    private $cedula;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $alias;
    private $contrasena;
    private $correo;
    private $rol;
    
    
    function getRol() {
        return $this->rol;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

        public function getId() {
        return $this->id;
    }

    public function getCedula() {
        return $this->cedula;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getAlias() {
        return $this->alias;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCedula($cedula) {
        $this->cedula = $cedula;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setAlias($alias) {
        $this->alias = $alias;
    }

    public function setContrasena($contrasena, $hash) {
        $this->contrasena = hash($hash, $contrasena, FALSE);
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

}
