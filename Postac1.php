<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of postac1
 *
 * @author andrzej.mroczek
 */
class Postac1 implements Product {
    private $staty=array();
    
    
    public function plusstat($stat,$value){
        $this->staty[$stat]+=$value;
    }
    
    public function minusstat($stat,$value){
        $this->staty[$stat]-=$value;
    }
    
    public function setProperties($property){
        $this->staty['imie']=$property->get('imie');
        
        $this->staty['sila']=$property->get('sila');
        
        $this->staty['zycie']=$property->get('zycie');
        
        $this->staty['speed']=$property->get('speed');
    }
    public function getProperties(){
       $wyswietl="  Postac1 staty ";
       foreach($this->staty as $staty){
       $wyswietl.=$staty.' ';
       }
       
        return $wyswietl;
        
    }
}



