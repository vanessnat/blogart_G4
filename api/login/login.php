<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php' ; 

$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$numStat = sql_escape($_POST['numStat']); 

/*echo("<pre>");
print_r($_POST);
echo("</pre>");
*/
sql_select('membre', "pseudoMemb, passMemb, dtCreaMemb, numStat", " pseudoMemb = '$pseudoMemb', passMemb = '$passMemb', numStat = '$numStat'");

header('Location: ../../views/backend/members/list.php');

?>
