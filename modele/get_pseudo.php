<?php

function get_pseudo($pseudo)
{
    global $mybase;
    $request = $mybase->prepare('SELECT * FROM Membres WHERE pseudo = ?');
    $request->execute(array($pseudo));
    $donnee = $request->fetch();
    $request->closeCursor;
    return $donnee;
}

