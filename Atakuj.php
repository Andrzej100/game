<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atakuj
 *
 * @author andrzej.mroczek
 */
class Atakuj extends Handler {

    public function setSuccessor($nextService) {
        $this->successor = $nextService;
    }

    public function handleRequest($request) {
        if($request->getService()=="Atakuj"){
            echo"Postac atakuje postac";
        }
        $this->successor->handleRequest($request);
    }

}
