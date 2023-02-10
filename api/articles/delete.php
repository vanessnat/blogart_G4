<?php
require_once __DIR__ . '/../../config.php';


$numArt = sql_escape($_POST['numArt']);

sql_delete('article', "numArt = $numArt");

header('Location: ../../views/backend/articles/list.php');

?>