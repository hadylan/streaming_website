/* 
THIS SCRIPT CAN BE OPTIMIZED
*/

console.log("register.js loadded");

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

    if ( url.includes("failed") ) {
        addStatus("Quelque chose s'est mal passée veillez à remplir le formulaire correctement!", "danger");
    }
    else if ( url.includes("confirmation") ) {
        addStatus("Inscription réussie! il ne vous reste plus qu'à valider votre compte via l'email que nous vous avons envoyé!", "info");
    }
    else if ( url.includes("validated") ) {
        addStatus("Inscription finalisée! vous pouvez désormais vous connecter!", "success");
    }
    else if ( url.includes("alreadyValidated") ) {
        addStatus("Votre compte semble déjà avoir été valider!", "info");
    }
    else if ( url.includes("email") ) {
        addStatus("L'adresse email est invalide", "info");
    }
    else if ( url.includes("password") ) {
        addStatus("Le mot de passe est invalide", "info");
    }
    
}
