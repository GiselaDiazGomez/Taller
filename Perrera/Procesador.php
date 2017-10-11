<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'Especial.php';
/**
 * Description of procesador
 *
 * @author Estudiantes
 */
function procesar(){
    $miPerro=new Especial();
    $miPerro->idperro=$_REQUEST["idperro"];
    $miPerro->raza=$_REQUEST["raza"];
    $miPerro->nombre=$_REQUEST["nombre"];
    $miPerro->edad=$_REQUEST["edad"];
    $miPerro->peso=$_REQUEST["peso"];
    
    if($miPerro->guardarPerro()==true)
        echo "Se ingresó";
        echo "id";
        echo "raza";
        echo "nombre";
        echo "edad";
        echo "peso";
    $miProcesador = new procesador();
    $miProcesador->procesar();
    
    
}
class procesador {
    //put your code here
}
