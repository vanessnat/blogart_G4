<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$users= sql_select("membre", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <th>Mot de passe</th>
                        <th>Email</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $membre) { ?>
                        <tr>
                            <td><?php echo $membre['prenomMemb']; ?></td>
                            <td><?php echo $membre['nomMemb']; ?></td>
                            <td><?php echo $membre['pseudoMemb']; ?></td>
                            <td><?php echo $membre['passMemb']; ?></td>
                            <td><?php echo $membre['eMailMemb']; ?></td>
                            <td><?php echo $membre['dtCreaMemb']; ?></td>
                            <td>
                                <a href="update.php?numMemb=<?php echo $membre['numMemb']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $membre['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer un utilisateur</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer