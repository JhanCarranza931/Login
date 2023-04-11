<?php

    class Usuario{

        private $idusuario;
        private $nombre;
        private $apellido;
        private $usuario;
        private $clave;


        public function __construct($idusuario,$nombre,$apellido,$usuario,$clave){

            $this->idusuario=$idusuario;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->usuario=$usuario;
            $this->clave=$clave;

        }
        //setter
        public function setIdUsuario($idusuario){
            $this->idusuario=$idusuario;
        }
        //getter
        public function getIdUsuario(){
            return $this->idusuario;
        }

        //setter
        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        //getter
        public function getNombre(){
            return $this->nombre;
        }

        //setter
        public function setApellido($apellido){
            $this->apellido=$apellido;
        }
        //getter
        public function getApellido(){
            return $this->apellido;
        }

        //setter
        public function setUsuario($usuario){
            $this->usuario=$usuario;
        }
        //getter
        public function getUsuario(){
            return $this->usuario;
        }
        //setter
        public function setClave($clave){
            $this->clave=$clave;
        }
        //getter
        public function getClave(){
            return $this->clave;
        }
        public function getNombreCompleto(){
            return $this->nombre. " ".$this->apellido;
        }
    }



?>