<?php
    require_once './src/View/includes/header.inc.php';
?>

<img src="https://images.footlocker.com/content/dam/final/footlockereurope/Online_activations/fl-campaign/2022/2022_03_19_fl_onl_back_to_school_neutral_narrative/05_final_output_files/ecom/2022_03_19_FL_OMN_BACK_TO_SCHOOL_NEUTRAL_NARRATIVE_Design_Digital_HPbannerpromo_FASHION_fr_1600x300.jpg" alt="">


<h1 class="text-center">Rechercher par catégorie, marque..</h1>
  <div class=" ms-3 my-3">
    <form method="GET" action="">
      <input type="hidden" name="" value="search">
      <div class="col-sm-3 my-3">
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="categorie">
          <option selected>Catégorie</option>
          <option value="1">Marque</option>
        </select>
      </div>
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-3">
          <input type="text" class="form-control" id="inlineFormInputMarque" placeholder="Que recherchez vous ?" name="marque">
        </div>
        <div class="col-sm-3 my-3">
          <input type="integer" class="form-control" id="inlineFormInputCategorie" placeholder="Que recherchez-vous ?" name="categorie">
        </div>
      </div>
      <button type="submit" class="btn btn-primary my-3">Rechercher</button>
    </form>
</div>

<?php foreach ($products as $product) : ?>

<div class="card" style="width: 25rem; text-align:center;display:inline-block;">
  <img class="card-img-top" src="<?= $product-> getPhoto()?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?= $product-> getMarque()?></h5>
    <small class="text-muted"><?= $product-> getPrix() ?>€</small>
    <p class="card-text"><?= $product-> getDescription()?></p>
    <a href="?page=chaussure&id=<?= $product-> getId() ?>" class="btn btn-dark">Voir le produit</a>
  </div>
 </div>

<?php endforeach ?>



      
<?php
    require_once './src/View/includes/footer.inc.php';
?>