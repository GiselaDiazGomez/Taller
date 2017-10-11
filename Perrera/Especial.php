<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Perro.php';
/**
 * Description of Especial
 *
 * @author Estudiantes
 */
class Especial extends Perro {
    //put your code here
    var $peso;
    var $raza;
    function guardarPerro() {
        $conexion=mysqli_connect(localhost, root, mysql2017, perrera, 8085);
        if($conexion){
            echo sí;
        }
        else{
            echo no;
            exit;
        }
    $cadena=("INSERT INTO Perro (idperro, raza, nombre, edad, peso) VALUES ("$idperro.$raza.$nombre.$edad.$peso")");
    
    mysqli_query($conexion, $cadena);
    
    if ($this->peso>25||$this->peso<0){
        $this->peso=0;
    }
    if ($this->edad>15||$this->edad<0){
        $this->edad=0;
    }    
    }
}
