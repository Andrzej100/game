<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Menu
 *
 * @author andrzej.mroczek
 */
class Menu extends Decorator {

    public function __construct(IComponent $menuNow) {
        $this->menu = $menuNow;
    }

    public function Task() {
        $fmat = "<a href='www.wp.pl'>Wp</a>&nbsp&nbsp&nbsp";
        return $this->menu->Task() . $fmat;
    }

    public function Task2() {
        return "Uda";
    }

}
