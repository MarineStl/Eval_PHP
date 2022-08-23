<?php
    require_once './src/View/includes/header.inc.php';
?>


<body>

<?php 

foreach ($products as $product) :?>
<div class="card" style="width: 20rem; text-align:center;display:inline-block;">
  <img class="card-img-top" src="<?= $product->getPhoto()?>" alt="">
  <div class="card-body">
    <h5 class="card-title"><?= $product->getMarque()?> </h5>
    <small class="text-muted"><?= $product->getPrix() ?>€</small>
    <p class="card-text"><?= $product->getDescription()?></p>
    <a href="?id=<?= $product-> getId() ?>&page=delete" class="btn btn-danger">Supprimer</a>
    <a href="?page=update&id=<?= $product-> getId() ?> "class="btn btn-danger">Modifier</a>
  </div>
 </div>

 <?php endforeach ; ?>

<h1 class="text-center">Ajouter un article</h1>
<form method="POST" action="?page=ajouter">
    <div class="col-md-8 mx-auto">
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" placeholder="" name="prix">
  </div>
  <div class="form-group">
    <label for="marque">Marque</label>
    <input type="text" class="form-control" id="marque" placeholder="" name="marque">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="" name="description">
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" class="form-control" id="genre" placeholder="" name="genre">
  </div>
  <div class="form-group">
    <label for="categorie">Catégorie</label>
    <input type="text" class="form-control" id="categorie" placeholder="" name="categorie">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" placeholder="" name="stock">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" placeholder="" name="photo">
  </div>
  <button type="submit" name="addshoe" class="btn btn-danger">Envoyer</button>
</div>
</form> 
</body>
<?php
    require_once './src/View/includes/footer.inc.php';
?>