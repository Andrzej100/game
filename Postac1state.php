<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Postac1state
 *
 * @author andrzej.mroczek
 */
class Postac1state implements IState {

    private $context;
    
    private $queryNow;

    public function __construct(Context2 $contextNow) {
        $this->context = $contextNow;
    }
    
    public function turainf(){
       $tura='postac1';
       return $tura;
   } 
    
   public function postac1Tura(){
       echo"postac pierwsza jest w trakcie wykonywania tury";
   }
   public function postac2Tura(){
       echo"przechodzimy do postaci drugiej";
       $this->context->setState($this->context->postac2State());
   }
   public function rozdanieTura(){
       echo "przechodzimy do rozdania punktow";
       $this->context->setState($this->context->rozdanieState());
   }
   public function setAction() {
       if($bylatura){$this->rozdanieTura();}
        // if (isset($_POST['sendNow']))
//{     
        $this->queryNow = 'Koniectury';
//}
        $Atakuj = new Atakuj();
        $Koniectury = new Koniectury($this);
        $Atakuj->setSuccessor($Koniectury);
        $loadup = new Request($this->queryNow);
       $Atakuj->handleRequest($loadup);}
       
    

}
