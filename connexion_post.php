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


//make password crypted with sha1
$pass_hach = sha1($_POST['password']);

//test for good identification
$request= $mybase->prepare('SELECT id, pseudo, pass FROM Membres WHERE pseudo = ? AND pass = ?');
$request->execute(array(
    $_POST['pseudo'],
    $pass_hach));
$result = $request->fetch();

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
    echo 'hi wlcome'.$_SESSION['id'] . $_SESSION['pseudo'];
    header("location: profile.php");
}

// redirecting to profile.php


