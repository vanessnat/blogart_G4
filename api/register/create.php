<?php

require_once __DIR__ . '/../../config.php' ; 

$prenomMemb =  sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = password_hash(sql_escape($_POST['passMemb']), PASSWORD_DEFAULT);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$dtCreaMemb = date("Y-m-d-H-i-s");

/*echo("<pre>");
print_r($_POST);
echo("</pre>");
*/
sql_insert('membre', "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, dtCreaMemb, numStat", "'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', '$dtCreaMemb', '3'");

header('Location: ../../views/backend/members/list.php');

?>