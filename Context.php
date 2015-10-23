<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Context
 *
 * @author andrzej.mroczek
 */
class Context {
     private $strategy;
     
     private $potion = array(1=>'Sila',2=>'Speed');
     
     public function setPotion(Product $postac) {
        $potion=$this->potion[rand(1,2)];
        echo $potion;
        switch ($potion) {
            case 'Sila':
                $this->strategy = new Sila($postac);
                break;
            case 'Speed':
                $this->strategy = new Speed($postac);
                break;
        }
    }
    public function getPotion() {
        return $this->strategy;
    }

}
