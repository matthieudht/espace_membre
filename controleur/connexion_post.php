<?php


//test if field are set
if (isset($_POST['pseudo'], $_POST['password'], $_POST['verifpassword']) && (!empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['verifpassword'])) && $_POST['password'] == $_POST['verifpassword'])
{

    //make post fields variable
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    $verifpassword = $_POST['verifpassword'];
    $email = $_POST['email'];
    
    //connexion to database
    include('../modele/connexion_sql.php');

    include('../modele/get_membre.php');
    echo 'including get_membre ok';
    $result = get_membre($pseudo, $password);
    

    if (!$result)
    {
	echo 'wrong id\'s '.'<br/>';
    }
    else
    {
	//start session if all ok
	session_start();
	$_SESSION['id'] = $result['id'];
	$_SESSION['pseudo'] = $result['pseudo'];
	echo 'hi welcome'.$_SESSION['id'] . $_SESSION['pseudo'];

	// redirecting to profile.php
	header("location: ../vue/profile.php");
    }

    
}
else {
    echo 'carefull, some fields are blank or password don\'t match!'.'<br/>';
}




