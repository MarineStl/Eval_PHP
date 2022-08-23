<?php

namespace App\Controller;

use App\Model\DeleteModel;
use App\Controller\AbstractController;

class DeleteController extends AbstractController
{
    public function index()
    {
        $deleteModel = new DeleteModel();

        $products = $deleteModel->findAll();
       
        $this->render('AddArticle.php', [
            'products' => $products
        ]);
    }
        public function delete()
    {
        $deleteModel = new DeleteModel();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $result = $deleteModel->delete($id);

        header('Location: ?page=Admin');
    }
}
