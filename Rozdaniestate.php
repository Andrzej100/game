<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rozdaniestate
 *
 * @author andrzej.mroczek
 */
class Rozdaniestate implements IState {
    private $context;

    public function __construct(Context2 $contextNow) {
        $this->context = $contextNow;
    }
   public function turainf(){
       $tura='rozdanie';
       return $tura;
   } 
   public function postac1Tura(){
       echo"przechodzimy do tury pierwszej";
       $this->context->setState($this->context->postac1State());
   }
   public function postac2Tura(){
       echo"przechodzimy do tury drugiej";
        $this->context->setState($this->context->postac2State());
   }
   public function rozdanieTura(){
       echo"punkty zsotały juz rozdane";
   }
}
