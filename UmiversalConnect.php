<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UmiversalConnect
 *
 * @author andrzej.mroczek
 */
class UmiversalConnect implements IConnectInfo {

    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;

    public function doConnect() {
        self::$hookup = mysqli_connect(self::$server, self::$user, self::$pass, self::$currentDB);
        if (self::$hookup) {
            
        } elseif (mysqli_connect_error(self::$hookup)) {
            echo('Here is why it failed: ' . mysqli_connect_error());
        }
        return self::$hookup;
    }

}
