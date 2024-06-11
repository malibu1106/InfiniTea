/* BURGER MENU */
let menuBurger = document.getElementById('burger'); // LE MENU EN LUI MEME > BALISE <ul>
let menuBurgerButton = document.getElementById('burgerButton'); // LE BOUTON POUR OUVRIR LE BURGER

if (menuBurgerButton) { // ON VERIFIE LA PRESENCE DU BOUTON POUR EVITER LES ERREURS DE JS
    menuBurgerButton.addEventListener('click', openMenu);
}

/*Fonction openMenu*/
function openMenu() {
    if (menuBurger.style.display != "flex") {
        menuBurger.style.display = "flex";
        menuBurgerButton.style.display = "none";
    }
}

/* Ecoute du click sur la page pour fermer le menu si l'utilisateur clique en dehors */
let menuHeight = 150; //TEMP
document.addEventListener('click', function (event) {
    if (event.clientY > menuHeight) { // SI L'UTILISATEUR CLIQUE A UNE HAUTEUR SUPERIEURE A CELLE DU BURGER
        closeMenu();
    }
});

/*Fonction closeMenu*/
function closeMenu() {
    menuBurger.style.display = "none";
    menuBurgerButton.style.display = "flex";
}


/* BACK OFFICE - EDIT PRODUCT */
/*AFFICHER OU MASQUER INPUT FILE SELON EDIT IMAGE OU NON*/
document.querySelectorAll('.edit_image').forEach(el => el.style.display = "none");

let checkboxEditImage = document.getElementById('helper-checkbox');
if (checkboxEditImage) {
    checkboxEditImage.addEventListener('change', displayEditImageElements);
}

function displayEditImageElements() {
    let displayStyle = checkboxEditImage.checked ? "flex" : "none";
    document.querySelectorAll('.edit_image').forEach(el => el.style.display = displayStyle);
}

/* CONNEXION - INSCRIPTION */
/*AFFICHER L'INSCRIPTION ET MASQUER LA CONNEXION*/
let signupForm = document.getElementById('signupForm');
let signinForm = document.getElementById('signinForm');
if (signupForm) { signupForm.style.display = "flex"; }
let signupButton = document.getElementById('signupButton');
if (signupButton) {
    signupButton.addEventListener('click', displaySignupForm);
}
function displaySignupForm() {
    signupForm.style.display = "flex";
    signupForm.style.display = "none";

}