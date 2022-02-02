<?php

function dbConnect($host, $userName, $userPssw, $databaseName) {
    // variables to connect to the DB
    /* default values:
    $host = "localhost";
    $userName = "root";
    $userPssw = "usbw";
    $databaseName = "tyox";
    */

    session_start();
    $_SESSION["aux"] = "Hola";
    
    $connSucceed = true;
    $conn = new mysqli($host, $userName, $userPssw, $databaseName);
    if ($conn->connect_errno) {
        $connSucceed = false;
        
        $_SESSION["conn"] = $conn;
        $_SESSION["connSucceed"] = $connSucceed;
    }
    return array($conn, $connSucceed);
}

function dbDisconnect($conn) {
    // close the connection with the db once we're done with the info
    $conn->close();	
}

?>