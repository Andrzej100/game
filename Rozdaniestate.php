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
    private $gracz1;
    private $gracz2;

    public function __construct(Context2 $contextNow,$gracz1,$gracz2) {
        $this->context = $contextNow;
        $this->gracz1=$gracz1;
        $this->gracz2=$gracz2;

        
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
public function setAction(){
    $this->gracz1->punktyakcji=2;
    $this->gracz2->punktyakcji=2;
    $this->postac1Tura();
    echo "nowa tura Rozpoczyna".$this->context->turaInf();
   
}
}
