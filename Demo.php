<?php

class Demo
{
    private $id_usuario;
    private $nombre;
    
     function __construct($iddemo, $nombre,$tipo,$edad) {
       $this->id_usuario = $iddemo;
       $this->nombre = $nombre;
  $this->tipo = $tipo;
  $this->edad = $edad;
     }
    
     function setIdUsuario($id_usuario){
       $this->iddemo = $id_usuario;
     } 
     function getIdUsuario(){
       return $this->id_usuario;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
  function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 
  function setEdad($edad){
       $this->edad = $edad;
     } 
     function getEdad(){
       return $this->edad;
     } 
}

?> 
