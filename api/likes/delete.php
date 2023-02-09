<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$likeA = sql_escape($_POST['likeA']);

sql_delete('like', "likeA = $likeA");

header('Location: ../../views/backend/likes/list.php');

?>