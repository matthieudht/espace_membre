<?php

//test if all field are present and not empty
if ((isset($_POST['pseudo'], $_POST['password'], $_POST['verifpassword'], $_POST['email'])) && (!empty($_POST['pseudo']) && !empty($_POST['password'])&& !empty($_POST['verifpassword']) && !empty($_POST['email'])))
{
    echo 'the fields are ok';
    foreach ($_POST as $key => $value)
    {
	echo $key.' : '.$value."<br/>";
    };
    echo empty($_POST['pseudo']);
    echo empty($_POST['password']);
    
}
else {
    echo 'carefull, some fields are blank';
}


//connexion to database
try
{
    $mybase = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'dehondtmatthieu', 'mD120989');
    echo 'connexion to espace_membre database is ok';
}
catch (exception $error)
{
    die('error'.$error->getMessage());
}

    

?>
