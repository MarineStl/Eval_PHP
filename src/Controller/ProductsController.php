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
}