<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$numThem = sql_escape($_POST['numStat']);

sql_delete('thematique', "numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');

?>