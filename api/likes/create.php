<?php

require_once __DIR__ . '/../../config.php' ; 

$numMemb = sql_escape($_POST['numMemb']);
$numArt = sql_escape($_POST['numArt']);
$likeA = sql_escape($_POST['likeA']);

sql_insert('numMemb', 'numArt', "'$likeA'");

header('Location: ../../views/backend/likes/list.php');