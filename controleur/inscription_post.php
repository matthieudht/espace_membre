<?php

//test if all field are present and not empty
if ((isset($_POST['pseudo'], $_POST['password'], $_POST['verifpassword'], $_POST['email'])) && (!empty($_POST['pseudo']) && !empty($_POST['password'])&& !empty($_POST['verifpassword']) && !empty($_POST['email'])) && $_POST['password'] == $_POST['verifpassword'])
{

    //make post fields variable
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $verifpassword = $_POST['verifpassword'];
    $email = $_POST['email'];
    
    //connexion to database
    try
    {
	$mybase = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'dehondtmatthieu', 'mD120989');
	echo 'connexion to espace_membre database is ok'.'<br/>';
    }
    catch (exception $error)
    {
	die('error'.$error->getMessage());
    }
    //including modele file 
    include_once('../modele/get_pseudo.php');
    
    echo 'including get_pseudo good'.'<br/>';
    $result = get_pseudo($pseudo);
    echo 'function good : ' . $result;

    if ($result)
    {
	echo 'the pseudo is already taken'.'<br/>';
    }
    else
    {
	//including modele file
	include('../modele/set_membre.php');
	echo ' including set_membre goog';
	set_membre($pseudo, $password, $email);
	echo 'membre add ';
	
	//redirecting page
	header("location: ../vue/index.php");
	
    }  
}
else {
    echo 'carefull, some fields are blank'.'<br/>';
}








?>
