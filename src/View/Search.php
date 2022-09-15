<?php
    require_once './src/View/includes/header.inc.php';
?>

<img src="https://images.footlocker.com/content/dam/final/footlockereurope/Online_activations/fl-campaign/2022/2022_03_19_fl_onl_back_to_school_neutral_narrative/05_final_output_files/ecom/2022_03_19_FL_OMN_BACK_TO_SCHOOL_NEUTRAL_NARRATIVE_Design_Digital_HPbannerpromo_FASHION_fr_1600x300.jpg" alt="">


<h1 class="text-center">Recherche</h1>
  <div class=" ms-3 my-3">
    <form method="GET" action="">
      <input type="hidden" name="page" value="search">
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-3">
          <input type="text" class="form-control" id="inlineFormInputMarque" placeholder="Que recherchez vous ?" name="marque">
        </div>
        <div class="col-sm-3 my-3">
          <input type="text" class="form-control" id="inlineFormInputGenre" placeholder="Quel genre recherchez-vous ?" name="genre">
        </div>
        <div class="col-sm-3 my-3">
          <input type="text" class="form-control" id="inlineFormInputCategorie" placeholder="Quelle catégorie recherchez-vous ?" name="categorie">
        </div>
      </div>
      <button type="submit" class="btn btn-primary my-3">Rechercher</button>
    </form>
</div>

<?php foreach ($products as $product) : ?>

<div class="card" style="width: 25rem; text-align:center;display:inline-block;">
  <h2><?= $product->getMarque() ?></h2>
    <img src ="<?=$product->getPhoto() ?>" width="50%" height="50%">
    <p><?= $product->getPrix() ?> €</p>
    <p><?= $product->getDescription() ?></p>
    <p>Catégorie: <?= $product->getCategorie() ?></p>
    <p>Genre: <?= $product->getGenre() ?></p>
    <a href="?page=chaussure&id=<?= $product-> getId() ?>" class="btn btn-dark">Voir le produit</a>
  </div>
 </div>

<?php endforeach ?>



      
<?php
    require_once './src/View/includes/footer.inc.php';
?>