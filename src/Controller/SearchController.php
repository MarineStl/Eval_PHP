<?php

namespace App\Controller;


use PDO;
use App\Model\SearchModel;
use App\Controller\AbstractController;

class SearchController extends AbstractController
{
    
    public function index()
    {
        
        $searchModel = new SearchModel();
        
     
        if (isset($_GET['marque']) || isset($_GET['genre']) || isset($_GET['categorie'])) { 
            $marque = trim($_GET['marque']);
            $genre= trim($_GET['genre']);
            $categorie= ($_GET['categorie']);
         
   
        } else {
            $marque = '';
            $genre = '';
            $categorie = '';
           
        }


        $products = $searchModel->search($marque, $genre, $categorie);
     

        $this->render('Search.php', [
            'products' => $products
        ]);
    }
}