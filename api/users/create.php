<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php' ; 

$numMemb = $_POST['numMemb'];
$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];
$dtCreaMemb = $_POST['dtCreaMemb'];
$numStat = $_POST['numStat'];

sql_insert('membre', "numMemb, prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat", "$numMemb, '$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', $numStat");

header('Location: ../../views/backend/members/list.php');
?>