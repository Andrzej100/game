<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Koniectury
 *
 * @author andrzej.mroczek
 */
class Koniectury extends Handler {
    private $tura;
    public function __construct($tura){
        $this->tura=$tura;
        
    }

    public function setSuccessor($nextService) {
        $this->successor = $nextService;
    }

    public function handleRequest($request) {
         if($request->getService()=="Koniectury"){
            echo"<br>Postac zakonczyla ture<br>";
            $bylatura=true;
            $this->tura->postac2Tura();
            
        }
        
    }

}
