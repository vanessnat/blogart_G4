<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST['numMemb']);
$numArt = sql_escape($_POST['numArt']);
$likeA = sql_escape($_POST['likeA']);

sql_update('like', "numMemb = '$numMemb'","numArt = $numArt", "likeA = '$likeA'");

header('Location: ../../views/backend/likes/list.php');

?>