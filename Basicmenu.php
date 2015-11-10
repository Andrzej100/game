<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Basicmenu
 *
 * @author andrzej.mroczek
 */
class Basicmenu extends IComponent {

    public function __construct() {
        $this->menu = "Podstawowa wersja  <br> <div>";
    }

    public function Task() {
        return $this->menu;
    }

    public function Task2() {
        return "<div>";
    }

}
