<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
      <?php  include "Client.php"; ?>
    </head>
    <body>
        <form action="index.php" method="POST">
            <input type="radio" name="sendNow" value="Atakuj" checked>Atakuj
             <br>
            <input type="radio" name="sendNow" value="Koniectury">Koniectury
            <input type="submit" value="wyslij"/>
        </form>
        <?php
        $worker = new Client();
        ?>
    </body>
</html>
