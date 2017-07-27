let garden = document.getElementById("garden") ;

let cases = document.getElementsByTagName('td') ;



//conséquence du clic sur une case
function soumettreCase(coord, statut) {
    let caseCliquee = document.getElementById(coord) ;
    switch(statut) {
        case "vide" :
            caseCliquee.className = "rate" ;
        break ;
        case "cache" :
            caseCliquee.className = "trouve" ;
        break ;
    }
}

/*Fonction pour appel AJAX facilité*/
function ajaxMultisurfaces(options) {

    let defaultOptions = {
        method: 'GET',
        url: '',
        async: true,
        args: '',
        callback: function() {},
        callbackError: function() {}
    }

    assignArgs(options, defaultOptions);

    let monAjax = new XMLHttpRequest();

    //Comme c'est asynchrone, on n'a pas la réponse là tout de suite : il faut préparer l'équivalent d'un addeventlistener ajaxien :
    monAjax.onreadystatechange = function() {

        if (monAjax.readyState === 4) {
            //conditionnelle pour ne prendre que les requêtes réussies (ou "not modified")
            if (monAjax.status === 200 || monAjax.status === 304) {
                defaultOptions.callback(monAjax.response);
            } else {
                defaultOptions.callbackError();
            }
        }
    };

    //on précise la méthode, le chemin, et si c'est asynchrone ou pas
    monAjax.open(defaultOptions.method, defaultOptions.url, defaultOptions.async);
    //on envoie la requête
    monAjax.send(defaultOptions.args);
}

function assignArgs(source, target) {
    for (let clef in source) {
        if (target.hasOwnProperty(clef)) {
            target[clef] = source[clef];
        }
    }
}