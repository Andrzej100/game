<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author andrzej.mroczek
 */
interface Product {
   
    public function getProperties();
    
    public function plusstat($stat,$value);
    
    public function minusstat($stat,$value);
}
