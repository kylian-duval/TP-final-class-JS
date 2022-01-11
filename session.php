<?php
session_start();

try{
    $BDD = new PDO('mysql:host=mysql-kylian-duval.alwaysdata.net; dbname=kylian-duval_jeu; charset=utf8', '223354', 'admin123456789.');
    $BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Erreur : '. $e->getMessage());
}

?>