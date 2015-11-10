<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Poziom
 *
 * @author andrzej.mroczek
 */
class Poziom extends Decorator {

    public function __construct(IComponent $menuNow) {
        $this->menu = $menuNow;
    }

    public function Task() {
        $fmat = "<a href='www.interia.pl'>Interia</a></div>";
        return $this->menu->Task() . $fmat;
    }

    public function Task2() {
        return $this->menu->Task2()."sie!";
    }

}
