<?php

require_once __DIR__ . '/../../config.php' ; 

$prenomMemb =  sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$dtCreaMemb = date("Y-m-d-H-i-s");
$numStat = sql_escape($_POST['numStat']);

/*echo("<pre>");
print_r($_POST);
echo("</pre>");
*/
sql_insert('membre', "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat", "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', '$numStat'");

header('Location: ../../views/backend/members/list.php');

?>