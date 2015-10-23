<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author andrzej.mroczek
 */
class Request {
    private $value;

    public function __construct($service) {
        $this->value = $service;
    }

    public function getService() {
        return $this->value;
    }

}
