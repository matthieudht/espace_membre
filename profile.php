<?php
session_start();
?>

<!doctype html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
  </head>
  <body>

    <article>
      <h1>Welcome <?php echo $_SESSION['pseudo'] ?>!</h1>
      <img src="" alt="avatar"/>
      <p>
	Pseudo: <?php echo $_SESSION['pseudo']?>
      </p>
      <a href="edit-profile.php" >Editer le profile</a>
      <a href="deconnexion.php" >deconnexion</a>
    </article>


    
  </body>
</html>
