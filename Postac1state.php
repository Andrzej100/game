<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Postac1state
 *
 * @author andrzej.mroczek
 */
class Postac1state implements IState {

    private $context;
    private $queryNow;
    private $turn;
    private $endgame=FALSE;
    private $gracz;

    public function __construct(Context2 $contextNow, $gracz) {
        $this->context = $contextNow;
        $this->gracz = $gracz;
    }

    public function turaInf() {
        return "Postac1";
    }

    public function setGame() {
        if($this->gracz->zycie()<=0){
        $this->endgame = TRUE;
        }
    }

    public function tura($turn) {
        $this->turn = $turn;
    }

    public function endgame() {
        return $this->endgame;
    }

    public function postac1Tura() {
        echo"postac pierwsza jest w trakcie wykonywania tury";
    }

    public function postac2Tura() {
        echo"przechodzimy do postaci drugiej";
        $this->context->setState($this->context->postac2State());
    }

    public function rozdanieTura() {
        echo "przechodzimy do rozdania punktow";
        $this->context->setState($this->context->rozdanieState());
    }

    public function setAction() {
        if ($this->turn) {
            $this->context->newTurn();
            $this->rozdanieTura();
            $this->context->actionSet();
        }
        if (isset($_POST['sendNow'])) {
            $this->queryNow = $_POST['sendNow'];

            $Atakuj = new Atakuj($this->gracz);
            $Koniectury = new Koniectury($this);
            $Atakuj->setSuccessor($Koniectury);
            $loadup = new Request($this->queryNow);
            $Atakuj->handleRequest($loadup);
        } else {
            echo "tura postac 1 wykonaj ruch";
        }
    }

}
