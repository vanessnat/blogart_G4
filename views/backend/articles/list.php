<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$articles = sql_select("article", "*");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Article</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Chapô</th>
                        <th>Date</th>
                        <th>Mots-clés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['dtCreArt']; ?></td>
                            <td><?php echo $article['libThem']; ?></td>
                            <td>
                                <a href="update.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer