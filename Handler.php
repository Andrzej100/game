<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Handler
 *
 * @author andrzej.mroczek
 */
abstract class Handler {

    abstract public function handleRequest($request);

    abstract public function setSuccessor($nextService);
}
