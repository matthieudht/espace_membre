<!doctype html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>


    <h1>Bienvenue sur espace membre !</h1>

    <p>S'inscrire : </p>

    <form action="../controleur/inscription_post.php" method="post">
      <label for="pseuso">Pseudo : </label>
      <input type="text" id="pseudo" name="pseudo"/><br/>
      <label for="pass">Mot de passe : </label>
      <input type="password" id="pass" name="password"/><br/>
      <label for="verifpass">verif Mot de passe : </label>
      <input type="password" id="verifpass" name="verifpassword"/><br/>
      <label for="email">email : </label>
      <input type="email" id="email" name="email"/><br/>
      <input type="submit" value="Envoyer"/>
    </form>

    <p>Se connecter:</p>
    <form action="../contructeur/connexion_post.php" method="post">
      <label for="pseuso">Pseudo : </label>
      <input type="text" id="pseudo" name="pseudo"/><br/>
      <label for="pass">Mot de passe : </label>
      <input type="password" id="pass" name="password"/><br/>
      <label for="verifpass">verif Mot de passe : </label>
      <input type="password" id="verifpass" name="verifpassword"/><br/>
      <input type="submit" value="Connexion"/>
    </form>
  </body>
</html>
