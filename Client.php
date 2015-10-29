<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author andrzej.mroczek
 */
function __autoload($class_name)
{
include $class_name . '.php';
}
ini_set("display_errors","1");
ERROR_REPORTING(E_ALL);
class Client {
    private $pierwszapostac;
    
    private $drugapostac;
    
    private $potion;
    
    private $potion2;
    
    private $context;
    
    public function __construct(){
        if(empty($_POST['sendNow'])){
          $this->pierwszapostac=new Postac1factory();
          $produkt=$this->pierwszapostac->startFactory();
          //echo $produkt->getProperties();
          $this->drugapostac= new Postac2factory();
          $produkt2=$this->drugapostac->startFactory();
          //echo $produkt2->getProperties();
       // $context=new Context();
       // $context2=new Context();
       // $context->setPotion($produkt);
       // $context2->setPotion($produkt2);
       //$this->potion=$context->getPotion();
       // $this->potion2=$context2->getPotion();
       // echo $produkt->getProperties();
       // echo $produkt2->getProperties();
        $context=new Context2($produkt,$produkt2);
        $context->actionSet();
        if($context->endgame()){
            echo"koniec gry".$context->turainf();
        }
        $s=serialize($context);
        file_put_contents('plik.txt',$s);
        }else{
        $data=file_get_contents('plik.txt');
        $a=unserialize($data);        
        $context=$a;
        $context->actionSet();
        var_dump($context->endgame());
        if($context->endgame()){
            echo"koniec gry wygrales".$context->turainf();
        }
        $s=serialize($context);
        file_put_contents('plik.txt',$s);
        }
        
        
    }
}
//$worker = new Client();