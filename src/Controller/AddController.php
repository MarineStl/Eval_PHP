<?php

namespace App\Controller;

use DateTime;
use App\Model\ProductsModel;
use App\Controller\AbstractController;

class AddController extends AbstractController
{

public function form_add() {
    // $created_at = new DateTime;
    // echo($created_at);
    $this->render('AddArticle.php', [
    ]); 
    
}   

public function createShoe()
{
    
    // je récupère le name depuis le formulaire
    if (!empty($_POST['prix']) && !empty($_POST['marque']) && !empty($_POST['description']) && !empty($_POST['genre']) && !empty($_POST['categorie']) && !empty($_POST['stock'])){
        $prix= $_POST["prix"];
        $marque= $_POST["marque"];
        $description= $_POST["description"];
        $genre= $_POST["genre"];
        $categorie= $_POST["categorie"];
        $stock= $_POST["stock"];
        // $photo= $_FILES["photo"];
        // $created_at = new DateTime;
        // echo($prix);
        $productModel = new ProductsModel();
        $productModel->createShoe($prix, $marque, $description, $genre, $categorie, $stock);

        header('Location: ?page=Admin');
        exit();
        
    }
}



}