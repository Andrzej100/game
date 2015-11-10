<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gra
 *
 * @author andrzej.mroczek
 */
class Gra extends Decorator {

    public function __construct(IComponent $menuNow) {
        $this->menu = $menuNow;
    }

    public function Task() {
        $fmat = "<a href='www.onet.pl'>Onet</a>&nbsp&nbsp&nbsp";
        return $this->menu->Task() . $fmat;
    }

    public function Task2() {
        return $this->menu->Task2()."lo";
    }

}
