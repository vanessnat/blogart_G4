<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php' ; 

$numMemb = sql_escape($_POST['numMemb']);
$prenomMemb =  sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$dtCreaMemb = sql_escape($_POST['dtCreaMemb']);
$numStat = sql_escape($_POST['numStat']);

sql_insert('membre', "numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat", "$numMemb, '$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', $numStat");

header('Location: ../../views/backend/members/list.php');
?>