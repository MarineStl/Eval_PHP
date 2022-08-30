<?php

namespace App\Controller;

use App\Model\UpdateModel;
use App\Controller\AbstractController;

class UpdateController extends AbstractController
{

    public function index()
    {
        $updateModel = new UpdateModel();

        $chaussure = $updateModel->findAll();
       
        $this->render('AddArticle.php', [
            'chaussure' => $chaussure
        ]);
    }

    public function update()
    {
        $updateModel = new UpdateModel();

        
        if (isset($_POST['prix'])) {
            $prix= $_POST["prix"];
            $marque= $_POST["marque"];
            $description= $_POST["description"];
            $genre= $_POST["genre"];
            $categorie= $_POST["categorie"];
            $stock= $_POST["stock"];
        }    

    if (isset($_POST['prix'])) {
    if (isset($_POST ['marque']) && (!empty($_POST['marque'])) &&
        isset($_POST ['description']) && (!empty($_POST['description'])) &&
        isset($_POST ['genre']) && (!empty($_POST['genre'])) &&
        isset($_POST ['categorie']) && (!empty($_POST['categorie'])) &&
        isset($_POST ['stock']) && (!empty($_POST['stock'])))
    
    $updateModel = new UpdateModel();

            $id = $_GET['id'];
            $updateModel->update($prix, $marque, $description, $genre, $categorie, $stock);
            }
       
            $chaussure = $updateModel->findById($_GET['id']);
            
            $this->render('Update.php', [
                'chaussure' => $chaussure
            
        ]);
    }
}