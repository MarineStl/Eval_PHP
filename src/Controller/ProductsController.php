<?php

namespace App\Controller;

use App\Model\ProductsModel;
use App\Controller\AbstractController;

class ProductsController extends AbstractController
{
    public function index()
    {
        $productsModel = new ProductsModel();

        $products = $productsModel->findAll();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('accueil.php', [
            'products' => $products
        ]);
    }
    public function showOneShoe()
    {
        $id= $_GET['id']; 
        
        $productModel = new ProductsModel();
        $chaussure = $productModel->findById($id);

        $chaussure = $chaussure[0];
        
        $this->render('showOneShoe.php', [
            'chaussure' => $chaussure
        ]); 
    }
    public function addProduct()
    {
        $productModel = new ProductsModel();
        // je récupère le name depuis le formulaire
        if (isset($_POST['id'])) {
            $prix= $_POST["prix"];
            $created_at= $_POST["created_at"];
            $marque= $_POST["marque"];
            $description= $_POST["description"];
            $sexe= $_POST["sexe"];
            $categorie= $_POST["categorie"];
            $stock= $_POST["stock"];
            $photo= $_FILES["photo"];
        }
       
        if (!empty($id)) {
            // je crée
            $productModel = new ProductsModel();
            $article_id = $productModel->addProduct($prix, $created_at, $marque, $description, $sexe, $categorie, $stock, $photo);
        }

        $this->render('AjouterArticle.php', [
        ]); 
    }
}