<?php


include_once('modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')

{

    include_once('vue/index.php');

} else
{
    echo 'wrong!';
}

