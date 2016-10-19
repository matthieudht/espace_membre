<?php

//test if all field are present and not empty
if ((isset($_POST['pseudo'], $_POST['password'], $_POST['verifpassword'], $_POST['email'])) && (!empty($_POST['pseudo']) && !empty($_POST['password'])&& !empty($_POST['verifpassword']) && !empty($_POST['email'])))
{
    echo 'the fields are ok'.'<br/>';
    foreach ($_POST as $key => $value)
    {
	echo $key.' : '.$value."<br/>";
    };
    echo empty($_POST['pseudo']).'<br/>';
    echo empty($_POST['password']).'<br/>';
    
}
else {
    echo 'carefull, some fields are blank'.'<br/>';
}


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


// test if pseudo is not already taken in database
$request = $mybase->prepare('SELECT * FROM Membres WHERE pseudo = ?');
$request->execute(array($_POST['pseudo']));
$result = $request->fetch();
echo $result['pseudo'].'<br/>';

if ($result)
{
    echo 'the pseudo is already taken'.'<br/>';
}
else
{
    echo 'good choice of pseudo'.'<br/>';
}



    

?>
