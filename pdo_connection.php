<?php

$hostname = "localhost"; //Naam van de Server
$dbname = "EenmaalAndermaal";    //Naam van de Database
$username = "EAuser";     //Inlognaam
$wachtwoord = "groep33FTW";      //Password

global $pdo;
//$pdo = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;ConnectionPooling=0", "$username", "$wachtwoord");
//
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


try {
$pdo = new PDO ("sqlsrv:Server=$hostname;Database=$dbname;ConnectionPooling=0", "$username", "$wachtwoord");
 //set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //
//    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>



