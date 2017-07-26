let garden = document.getElementById("garden") ;

let cases = document.getElementsByTagName('td') ;

for (let uneCase of cases) {
    uneCase.addEventListener("click", function() {
    
    let coord = this.getAttribute('id') ;
    console.log(coord) ;

}) ;
}