<?php
include '../../header.php';

?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Adminstration de "Insolit'Bordeaux" </h1>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pages</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/members/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/members/create.php" class="btn btn-success">Créer</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/articles/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/articles/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/thematiques/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comments/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/comments/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>J'aime</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success ">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mots-Clés</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>

</div>

