<?php


class Garden {
    protected $tabAssoGarden ;
    
    function __construct($tabAssoGarden) {
        $this->setTabAssoGarden($tabAssoGarden) ;
    }

    function setTabAssoGarden($tabAssoGarden) {
        $this->tabAssoGarden = $tabAssoGarden;
    }

    /*function getTabAssoGarden() {
        return $this->tabAssoGarden;
    }*/


    public function afficheGarden() {
        echo '<table id="garden">' ;
        echo '<thead><tr><th></th>' ;
        
        for($nbcol = 1; $nbcol <= 10; $nbcol++) {
            echo "<th>$nbcol</th>" ;
        }
        echo '</tr></thead><tbody>' ;
        
        foreach($this->tabAssoGarden as $ligne => $cases) {
            echo "<tr><td>$ligne</td>" ;
            foreach($cases as $coord => $case) {
                echo '<td id='.$coord.'></td>' ;
            }
            echo "</tr>" ;
        }       
        
        echo '</tbody></table>' ;        
    }
}