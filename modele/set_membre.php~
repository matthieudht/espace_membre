<?php


function set_membre($pseudo, $password, $email)
{

    //make password crypted  with sha1
    $pass_hach = sha1($password);

    // insert data from form into database (verification ok)
    $request = $mybase->prepare('INSERT INTO Membres(pseudo, pass, email, date_inscription) VALUES(?, ?, ?, CURRENT_DATE())');
    $request->execute(array(
	$pseudo,
	$pass_hach,
	$email));
    echo 'insertion ok';
    $request->closeCursor;
}
