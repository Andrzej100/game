<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CreateTable
 *
 * @author andrzej.mroczek
 */
class CreateTable {

    private $tableMaster = "proxyLog";
    private $hookup;

    public function __construct() {
        $operation = new UniversalConnect();
        $this->hookup = $operation->doConnect();
        $res = "SHOW TABLES LIKE $this->tableMaster";
        if (!$this->hookup->query($res)) {
            $sql = "CREATE TABLE $this->tableMaster (uname NVARCHAR(15),
pw NVARCHAR(120))";
        }

        if ($this->hookup->query($sql) === true) {
            printf("Tabela $this->tableMaster została utworzona.<br/> \n");
        }

        $this->hookup->close();
    }

}

$worker = new CreateTable();

