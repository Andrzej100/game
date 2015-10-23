<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Postac2state
 *
 * @author andrzej.mroczek
 */
class Postac2state implements IState {
    private $context;

    public function __construct(Context2 $contextNow) {
        $this->context = $contextNow;
    }
    
     public function turainf(){
       $tura='postac2';
       return $tura;
   }
   
   public function postac1Tura(){
       echo"przechodzimy do tury pierwszej";
       $this->context->setState($this->context->postac1State());
   }
   public function postac2Tura(){
       echo"postac 2 wykonuje wlasnie ture";
   }
   public function rozdanieTura(){
       echo"przechodzimy do rozdania punktow";
       $this->context->setState($this->context->rozdanieState());
   }
}
