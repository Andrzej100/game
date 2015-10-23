<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of postac1factory
 *
 * @author andrzej.mroczek
 */
class Postac1factory extends Creator {
    
    protected function factoryMethod() {
        $product= new Postac1;
        $property=new Property();
        $property->set('imie','Andrzej');
        $property->set('sila',10);
        $property->set('zycie',20);
        $property->set('speed',15);
        $product->setProperties($property);
        return ($product);
    }
}
