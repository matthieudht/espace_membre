<?php


//connexion to database
try
{
    $mybase = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'dehondtmatthieu', 'mD120989');
   
}
catch (exception $error)
{
    die('error'.$error->getMessage());
}
