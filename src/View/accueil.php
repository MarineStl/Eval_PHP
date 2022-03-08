<!DOCTYPE html>
<html lang="fr">


<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstraps CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet" />

    <title>Footlocker</title>

</head>


<body>

<?php foreach ($products as $product) : ?>


    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="">
  <div class="card-body">
    <h5 class="card-title"><?= $product-> getMarque()?></h5>
    <p class="card-text"><?= $product-> getdescription()?></p>
    <a href="#" class="btn btn-primary">Voir le produit</a>
  </div>
</div>

<?php endforeach ?>





</body>
</html>

