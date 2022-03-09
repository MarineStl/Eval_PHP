<?php
    require_once './src/View/includes/header.inc.php';
?>
    <h1><?= $chaussure->getmarque() ?></h1>
    <p><?= $chaussure->getprix() ?> €</p>
    <p><?= $chaussure->getdescription() ?></p>
    <p><?= $chaussure->getcategorie() ?></p>
    <p><?= $chaussure->getsexe() ?></p>


<?php
    require_once './src/View/includes/footer.inc.php';
?>