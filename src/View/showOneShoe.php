<?php
    require_once './src/View/includes/header.inc.php';
?>


<div class="card" style="width: 25rem; text-align:center;display:inline-block;">
  <h2><?= $chaussure->getMarque() ?></h2>
    <img src ="<?=$chaussure->getPhoto() ?>" width="50%" height="50%">
    <p><?= $chaussure->getPrix() ?> €</p>
    <p><?= $chaussure->getDescription() ?></p>
    <p>Catégorie: <?= $chaussure->getCategorie() ?></p>
    <p>Genre: <?= $chaussure->getGenre() ?></p>
    <p><?= $chaussure->getCreated_at() ?></p>
  </div>
 </div>




    

<?php
    require_once './src/View/includes/footer.inc.php';
?>