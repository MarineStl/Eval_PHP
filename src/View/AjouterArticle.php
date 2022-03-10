<?php
    require_once './src/View/includes/header.inc.php';
?>

<h1 class="text-center">Ajouter un article</h1>
<form method="POST">
    <div class="col-md-8 mx-auto">
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="text" class="form-control" id="prix" placeholder="">
  </div>
  <div class="form-group">
    <label for="marque">Marque</label>
    <input type="text" class="form-control" id="marque" placeholder="">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="">
  </div>
  <div class="form-group">
    <label for="sexe">Sexe</label>
    <input type="text" class="form-control" id="sexe" placeholder="">
  </div>
  <div class="form-group">
    <label for="categorie">Catégorie</label>
    <input type="text" class="form-control" id="categorie" placeholder="">
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text" class="form-control" id="stock" placeholder="">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" placeholder="">
  </div>
  <button type="submit" class="btn btn-danger">Envoyer</button>
</div>
</form> 

<?php
    require_once './src/View/includes/footer.inc.php';
?>