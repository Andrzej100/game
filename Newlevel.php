<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Newlevel
 *
 * @author andrzej.mroczek
 */
class Newlevel extends Kolejnosc {

    protected function addPoints($parameter) {
       $database->add($parameter,1);
    }

    protected function changestats($user) {
        $user->actualstats();
    }

}
