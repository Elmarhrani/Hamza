<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
@include_once '../racine.php';
include_once RACINE_PATH.'/beans/Commentaire.php';
include_once RACINE_PATH.'/connexion/Connexion.php';
include_once RACINE_PATH.'/dao/IDao.php';
/**
 * Description of CommentaireService
 *
 * @author admin
 */
class CommentaireService implements IDao {
    //put your code here
    private $connexion;
    private $commentaire;
    
    
    public function __construct() {
        $this->connexion = new Connexion();
        $this->commentaire = new Commentaire("");       
    }
    
    public function create($commentaire) {
        $query = "SELECT count(*) FROM commentaire ";
        $stmt = $this->connexion->getConnextion()->query($query);
        
        if($stmt->fetchColumn() > 0 ){
            $description = $commentaire->getDesc();
            $sql = "UPDATE commentaire SET description='$description' WHERE id=1";
            // Prepare statement
            $stmt = $this->connexion->getConnextion()->prepare($sql);
            // execute the query
            $stmt->execute();
        }
        else {
             $query = "INSERT INTO commentaire (description) VALUES ('" . $commentaire->getDesc()."')";
             $req = $this->connexion->getConnextion()->prepare($query);
             $req->execute();
        }
        header('Location: http://localhost/HamzaProject/hamza.php');   
    }

    public function getDesc() {
        $query = "SELECT  * FROM commentaire LIMIT 1 ";
        $stmt = $this->connexion->getConnextion()->query($query);
        $row=  $stmt->fetch();
        return  $row["description"];
    }
    public function masquer() {
        $query = "SELECT count(*) FROM commentaire ";
        $stmt = $this->connexion->getConnextion()->query($query);
        
        if($stmt->fetchColumn() > 0 ){
            $description = 'vide';
            $sql = "UPDATE commentaire SET description='$description' WHERE id=1";
            // Prepare statement
            $stmt = $this->connexion->getConnextion()->prepare($sql);
            // execute the query
            $stmt->execute();
        }
        else {
             $query = "INSERT INTO commentaire (description) VALUES ('vide')";
             $req = $this->connexion->getConnextion()->prepare($query);
             $req->execute();
        }
        header('Location: http://localhost/HamzaProject/hamza.php'); 
    }

}
