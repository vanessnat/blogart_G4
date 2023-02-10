<?php

require_once __DIR__ . '/../../config.php' ; 

$numMotCle = sql_escape($_POST['numMotCle']);
$libMotCle = sql_escape($_POST['libMotCle']);


sql_update('motcle',
 "numMotCle = '$numMotCle', libMotCle = '$libMotCle'",
"numMotCle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');
?>