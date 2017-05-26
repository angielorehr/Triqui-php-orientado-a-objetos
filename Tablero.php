<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tablero
 *
 * @author Estudiantes
 */
class Tablero {
    
    var $fichas=array();
    
    function inicializarFichas(){
        
        foreach($this->fichas as $indice=>$valor){
            $this->fichas[$indice]=0;
        }
        
    }
    
    function mostrarFichas(){
        
        foreach($this->fichas as $indice=>$valor){
            echo $valor;
        }
        
    }
    
    
    
    
}
