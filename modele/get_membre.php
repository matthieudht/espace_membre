<?php

function get_membre($pseudo, $password)
{
    
    //make password crypted with sha1
    $pass_hach = sha1($_POST['password']);

    //test for good identification
    $request= $mybase->prepare('SELECT id, pseudo, pass FROM Membres WHERE pseudo = ? AND pass = ?');
    $request->execute(array(
	$_POST['pseudo'],
	$pass_hach));
    $result = $request->fetch();

    return $result;
}
