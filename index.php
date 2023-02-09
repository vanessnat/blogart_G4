<?php require_once 'header.php'; 
sql_connect();

if(isset($_SESSION['numMemb'])){
    echo ('Vous êtes connecté'); 
}
?>


<?php require_once 'footer.php'; ?>