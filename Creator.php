<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Creator
 *
 * @author andrzej.mroczek
 */
abstract class Creator {
    protected abstract function factoryMethod();
    
    public function startFactory(){
        $mfg=$this->factoryMethod();
        return $mfg;
    }
}
