<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once "../racine.php";
    include_once  RACINE_PATH."../service/CommentaireService.php";
}
$service = new CommentaireService();

$service->create(new Commentaire($_POST['email']));




