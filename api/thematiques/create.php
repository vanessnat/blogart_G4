<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php' ; 

$libThem = sql_escape($_POST['libThem']);

sql_insert('thematique', 'libThem', "'$libThem'");

header('Location: ../../views/backend/thematiques/list.php');