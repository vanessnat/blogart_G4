<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php' ; 

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

header location 
bouton ds header 
is connect mcompte 
if not s'inscrire, se connecter 
?>
