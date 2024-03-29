<?php

namespace App\Model;

use PDO;
use App\database\Database;

class ProductsModel
{
    protected $id;

    protected $prix;

    protected $created_at;

    protected $marque;

    protected $description;

    protected $genre;

    protected $categorie;

    protected $stock;

    protected $photo;

    protected $pdo;
    

    const TABLE_NAME = 'chaussures';

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPDO();
    }

    public function findAll()
    {
        $sql = 'SELECT
                `id`
                ,`prix`
                ,`created_at`
                ,`marque`
                ,`description`
                ,`genre`
                ,`categorie`
                ,`stock`
                ,`photo`
                FROM ' . self::TABLE_NAME . '
                ORDER BY `id` ASC;
        ';

        $pdoStatement = $this->pdo->query($sql);
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public function findById($id){
        
        $sql = 'SELECT * FROM ' . self::TABLE_NAME . ' WHERE id = '.$id;

        $pdoStatement = $this->pdo->query($sql);
        
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        return $result;
    }

    public function createShoe($prix, $marque, $description, $genre, $categorie, $stock, $photo)
    {
        $sql = ("INSERT INTO " . self::TABLE_NAME . " (prix, marque, description, genre, categorie, stock, photo) 
        VALUES (:prix, :marque, :description, :genre, :categorie, :stock, :photo)");
        
        $pdoStatement = $this->pdo->prepare($sql);
        $pdoStatement->bindValue(':prix', $prix, PDO::PARAM_INT);
        // $pdoStatement->bindValue(':created_at', $created_at, PDO::PARAM_STR);
        $pdoStatement->bindValue(':marque', $marque, PDO::PARAM_STR);
        $pdoStatement->bindValue(':description', $description, PDO::PARAM_STR);
        $pdoStatement->bindValue(':genre', $genre, PDO::PARAM_STR);
        $pdoStatement->bindValue(':categorie', $categorie, PDO::PARAM_STR);
        $pdoStatement->bindValue(':stock', $stock, PDO::PARAM_INT);
        $pdoStatement->bindValue(':photo', $photo, PDO::PARAM_STR);
        $result = $pdoStatement->execute();
        
        return $result;
    }
    


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of categorie
     */ 
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     *
     * @return  self
     */ 
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
}