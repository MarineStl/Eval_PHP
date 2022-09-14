<?php

namespace App\Controller;


use PDO;
use App\Model\SearchModel;
use App\Controller\AbstractController;

class SearchController extends AbstractController
{
    
    public function search()
    {
        
        $searchModel = new SearchModel();
        
     
        if (isset($_GET['marque']) || isset($_GET['categorie'])) { 
            $marque = trim($_GET['marque']);
            $categorie= trim($_GET['categorie']);
         
   
        } else {
            $marque = '';
            $categorie = '';
           
        }


        $products = $searchModel->search($marque, $categorie);
     

        $this->render('Search.php', [
            'products' => $products
        ]);
    }
}