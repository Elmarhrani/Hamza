<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
    #commentaire{
        background-color: #EEEEEE;
        font-family: sans-serif;
        font-weight: 400;
        font-size: 14px;
        width: auto;
        height: auto;
        border: solid 2px gray;
    }
    
    #test {
        width: 400px;
        height: 400px;
    }
</style>
<?php
 require_once "racine.php";
 include_once  RACINE_PATH."./service/CommentaireService.php";
 ?>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title>Second Page</title>
    </head>
    <body>
        Ici la page l 3adia li sifti liya f la photo
        <?php
            $service = new CommentaireService();
            $com = $service->getDesc();
            if( $com != 'vide') {
        ?>
            <div id="test">
                <div id="commentaire">
                    <?php echo $com ?>
                </div> 
            </div>
        <?php
            }
        ?>
    </body>
</html>
