<?php

require_once __DIR__ . '/../../config.php' ; 

$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);

$membre = sql_select('membre', "pseudoMemb, passMemb, dtCreaMemb, numStat, numMemb", "pseudoMemb = '$pseudoMemb'")[0];

if(isset($membre)){
    if(password_verify($passMemb, $membre['passMemb'])){
        $_SESSION['numMemb'] = $membre['numMemb'];
    }
    else{
        exit ('Mot de passe incorrect'); 
    }
}


header('Location: ../../views/backend/members/list.php');
