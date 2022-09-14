<?php

namespace App\Controller;

use App\Model\UpdateModel;
use App\Controller\AbstractController;

class UpdateController extends AbstractController
{

    public function index()
    {
        $updateModel = new UpdateModel();

        $products = $updateModel->findAll();
       
        $this->render('AddArticle.php', [
            'products' => $products
        ]);
    }
    

    public function update()
    {
        $updateModel = new UpdateModel();
              
        if (isset($_POST['marque'])) {
            $prix= $_POST['prix'];
            $marque= $_POST['marque'];
            $description= $_POST['description'];
            $genre= $_POST['genre'];
            $categorie= $_POST['categorie'];
            $stock= $_POST['stock'];
            $photo= $_POST['photo'];
        }    

    if (isset($_POST['marque'])) {
        if (isset($_POST ['marque']) && (!empty($_POST['marque'])) &&
        isset($_POST ['prix']) && (!empty($_POST['prix'])) &&
        isset($_POST ['description']) && (!empty($_POST['description'])) &&
        isset($_POST ['genre']) && (!empty($_POST['genre'])) &&
        isset($_POST ['categorie']) && (!empty($_POST['categorie'])) &&
        isset($_POST ['stock']) && (!empty($_POST['stock'])) &&
        isset($_POST ['photo']) && (!empty($_POST['photo'])))

        
    $updateModel = new UpdateModel();

            $id = $_GET['id'];
            $updateModel->update($id, $prix, $marque, $description, $genre, $categorie, $stock, $photo);

            header('Location: ?page=Admin');
            exit();
            }
       
            $chaussure = $updateModel->findById($_GET['id']);
            
            $this->render('Update.php', [
                'chaussure' => $chaussure
            
            ]);
        }
    }