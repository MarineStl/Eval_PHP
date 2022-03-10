
<?php
    require_once './src/View/includes/header.inc.php';
?>

<?php foreach ($products as $product) : ?>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?= $product-> getPhoto()?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?= $product-> getMarque()?></h5>
    <small class="text-muted"><?= $product-> getPrix() ?>€</small>
    <p class="card-text"><?= $product-> getdescription()?></p>
    <a href="?page=chaussure&id=<?= $product-> getId() ?>" class="btn btn-danger">Voir le produit</a>
  </div>
 </div>



<?php endforeach ?>

<?php
    require_once './src/View/includes/footer.inc.php';
?>