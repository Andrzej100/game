<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Property
 *
 * @author andrzej.mroczek
 */
class Property {
     private $array = array();
     
      public function set($name, $value) {  
        $this->array[$name]=$value;
    }
    
    public function get($name) {
       if($this->array[$name]){
        return $this->array[$name];
       }
    }
   
}
