<?php


//test if field are set
if (isset($_POST['pseudo'], $_POST['password'], $_POST['verifpassword']) && (!empty($_POST['pseudo']) && !empty($_POST['password'])&& !empty($_POST['verifpassword'])))
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


//test for good identification

$request= $mybase->prepare('SELECT pseudo, pass FROM Membres WHERE pseudo = ? AND pass = ?');
$request->execute(array(
    $_POST['pseudo'],
    $_POST['password']));
$result = $request->fetch();

if (!$result)
{
    echo 'wrong id\'s '.'<br/>';
}
else
{
    echo 'hi wlcome';
}


?>
