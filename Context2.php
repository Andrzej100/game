<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Context2
 *
 * @author andrzej.mroczek
 */
class Context2 {

    private $postac1;
    private $postac2;
    private $rozdanie;
    private $currentState;

    public function __construct($gracz1,$gracz2) {
        
        $this->postac1 = new Postac1state($this,$gracz1);
        $this->postac2 = new Postac2state($this,$gracz2);
        $this->rozdanie = new Rozdaniestate($this,$gracz1,$gracz2);

        $this->currentState = $this->rozdanie;
        
        $this->currentState->setAction();
    }
    
    public function newTurn(){
      $this->postac1->tura(FALSE);
      $this->postac2->tura(FALSE);
    }
    
    public function turaPostac1() {
        $this->currentState->postac1Tura();
    }

    public function turaPostac2() {
        $this->currentState->postac2Tura();
    }

    public function turaRozdanie() {
        $this->currentState->rozdanieTura();
    }

    public function setState(IState $state) {
        $this->currentState = $state;
    }

    public function postac1State() {
        return $this->postac1;
    }

    public function postac2State() {
        return $this->postac2;
    }

    public function rozdanieState() {
        return $this->rozdanie;
    }
    public function actionSet(){
        $this->currentState->setAction();
    }
    public function endgame(){
        
        if($this->postac1->endgame()){
            return TRUE;
        }
        if($this->postac2->setGame()){
        return TRUE;
        }
        return FALSE;
    }
    public function turaInf(){
         $this->currentState->turaInf();
    }

}
