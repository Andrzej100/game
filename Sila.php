<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sila
 *
 * @author andrzej.mroczek
 */
class Sila extends Potion {
   private $postac;
    
    private $poziom;
    
    public function __construct(Product $postac){
        $this->poziom=rand(1,3);
        $this->postac=$postac;
        $this->add();
    }
    
    public function __destruct(){
        $this->minus();
        
    }
    protected function add(){
        $this->postac->plusstat('sila',$this->poziom);
    }
    
    protected function minus(){
        $this->postac->minusstat('sila',$this->poziom);
    }
}
