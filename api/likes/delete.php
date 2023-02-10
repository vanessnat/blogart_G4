<?php
require_once __DIR__ . '/../../config.php';


$likeA = sql_escape($_POST['likeA']);

sql_delete('like', "likeA = $likeA");

header('Location: ../../views/backend/likes/list.php');

?>