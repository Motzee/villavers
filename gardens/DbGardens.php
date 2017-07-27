<?php

class DbGardens {
    
    protected $tabAssoGarden ;
    
    function __construct(string $chemin = NULL) {
        //si partie existante
        if($chemin != NULL) {
            $garden = file_get_contents($chemin) ;
            $theGarden = json_decode($garden, true);
        }
        //sinon création de partie
        else {
            //$theGarden
        }
        
        $this->setTabAssGarden($theGarden); 
    }

    //SET
    public function setTabAssGarden(array $tableauAssociatif) {
        $this->tabAssoGarden = $tableauAssociatif ;
    }
    
    //GET
    /*public function getTabAssGarden():array {
        return $this->tabAssoGarden ;
    }*/
    

//CREATE
    public function creerGarden():Garden {
        $garden = new Garden($this->tabAssoGarden) ;
        return $garden ;
    } 
    
//READ
    
    
//UPDATE
    
    
//DELETE

}