<?php

namespace App\Controller;

use App\Model\ProductsModel;
use App\Controller\AbstractController;

class ProductsController extends AbstractController
{
    public function index()
    {
        $productModel = new ProductsModel();

        $products = $productModel->findAll();
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


    
}
