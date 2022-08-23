<?php
    require_once './src/View/includes/header.inc.php';
?>
    <h1><?= $chaussure->getMarque() ?></h1>
    <img src ="<?=$chaussure->getPhoto() ?>" width="50%" height="50%">
    <p><?= $chaussure->getPrix() ?> €</p>
    <p><?= $chaussure->getDescription() ?></p>
    <p><?= $chaussure->getCategorie() ?></p>
    <p><?= $chaussure->getGenre() ?></p>
    <p><?= $chaussure->getCreated_at() ?></p>

<?php
    require_once './src/View/includes/footer.inc.php';
?>