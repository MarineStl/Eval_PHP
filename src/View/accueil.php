
<?php
    require_once './src/View/includes/header.inc.php';
?>

<img src="https://images.footlocker.com/content/dam/final/footlockereurope/Online_activations/fl-campaign/2022/2022_03_19_fl_onl_back_to_school_neutral_narrative/05_final_output_files/ecom/2022_03_19_FL_OMN_BACK_TO_SCHOOL_NEUTRAL_NARRATIVE_Design_Digital_HPbannerpromo_FASHION_fr_1600x300.jpg" alt="">





<?php foreach ($products as $product) : ?>


<div class="card" style="width: 20rem; text-align:center;display:inline-block;">
  <img class="card-img-top" src="<?= $product-> getphoto()?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?= $product-> getmarque()?></h5>
    <small class="text-muted"><?= $product-> getprix() ?>€</small>
    <p class="card-text"><?= $product-> getdescription()?></p>
    <a href="?page=chaussure&id=<?= $product-> getid() ?>" class="btn btn-dark">Voir le produit</a>
  </div>
 </div>

<?php endforeach ?>


<?php
    require_once './src/View/includes/footer.inc.php';
?>