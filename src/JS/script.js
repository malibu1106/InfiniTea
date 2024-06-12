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


/* SLIDER HIGHLIGHTS */
let highlightsProducts = document.querySelectorAll('.highlights_products');
let index = 0;
highlightsProducts[index].classList.add("show");
let leftButton = document.getElementById('slide_left');
let rightButton = document.getElementById('slide_right');
if (leftButton) { leftButton.addEventListener("click", prevProduct) }
if (rightButton) { rightButton.addEventListener("click", nextProduct) }


function nextProduct() {
    highlightsProducts[index].classList.remove("show");
    index++;
    if (index === highlightsProducts.length) { index = 0; }
    highlightsProducts[index].classList.add("show");
}

function prevProduct() {
    highlightsProducts[index].classList.remove("show");
    index--;
    if (index < 0) { index = 2; }
    highlightsProducts[index].classList.add("show");
}