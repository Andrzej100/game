<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Postac2factory
 *
 * @author andrzej.mroczek
 */
class Postac2factory extends Creator {
    
    protected function factoryMethod() {
        $product= new Postac2;
        $property=new Property();
        $property->set('actionpkt',0);
        $property->set('imie','Piotr');
        $property->set('sila',10);
        $property->set('zycie',20);
        $property->set('speed',15);
        $product->setProperties($property);
        return ($product);
    }
}
