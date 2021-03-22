/* 
THIS SCRIPT CAN BE OPTIMIZED
*/

console.log("login.js loadded");

const url = window.location.search;
const section = document.querySelector('#content');
const newStatus = document.createElement('h6');

if ( url.includes("status=") ) {

    function addStatus(text, color) { 
        //color param need to be a color defined by bootstrap. exemple : "text-danger, text-light"

        newStatus.textContent = text;
        newStatus.className = "text-"+color;
        section.appendChild(newStatus);
    }

    if ( url.includes("password") ) {
        addStatus("Il semblerait que le mot de passe ne soit pas valide!", "danger");
    }
    else if ( url.includes("notactivated") ) {
        addStatus("Vous devez valider votre compte avant de pouvoir vous connecter.", "danger");
    }
    else if ( url.includes("error") ) {
        addStatus("Veillez à remplir le formulaire correctement!", "danger");
    }
    else if ( url.includes("email") ) {
        addStatus("Veillez à saisir une adresse e-mail correcte.", "danger");
    }
    else if ( url.includes("user") ) {
        addStatus("Aucun utilisateur trouvé.", "danger");
    }
    
}
