<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Commentaire
 *
 * @author admin
 */
class Commentaire {
    //put your code here
    private $id;
    private $desc;
    
    function __construct($desc) {
        $this->desc = $desc;
    }
    
    function getId() {
        return $this->id;
    }

    function getDesc() {
        return $this->desc;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDesc($desc) {
        $this->desc = $desc;
    }



}
