<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kolejnosc
 *
 * @author andrzej.mroczek
 */
abstract class Kolejnosc {

    protected $user;
    protected $parameter;

    public function templateMethod($user, $parameter) {
        $this->user = $user;
        $this->parameter = $parameter;
        $this->addPoints($this->user);
        $this->changestats($this->parameter);
    }

    abstract protected function addPoints($parameter);

    abstract protected function changestats($user);
}
