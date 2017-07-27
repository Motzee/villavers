
//pose d'un détecteur d'événements au clic sur une case
for (let uneCase of cases) {
    uneCase.addEventListener("click", function() {
        let coord = this.getAttribute('id') ;

        ajaxMultisurfaces({
            url: 'garden.json',
            callback: function(response) {
                let truc = JSON.parse(response) ;
                let ligne = coord.substr(0, 1) ;
                soumettreCase(coord, truc[ligne][coord]) ;
            }
        });

    }) ;
}