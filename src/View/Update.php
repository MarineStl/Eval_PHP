<?php
    require_once './src/View/includes/header.inc.php';
?>


<body>
<h1 class="text-center">Modifier un article</h1>
<form method="POST">
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
    <input type="int" class="form-control" id="stock" placeholder="" name="stock">
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" class="form-control" id="photo" placeholder="" name="photo">
  </div>
  <button type="submit" name="addshoe" class="btn btn-danger" value="modifier">Envoyer</button>
</div>
</form> 
</body>

<?php
    require_once './src/View/includes/footer.inc.php';
?>