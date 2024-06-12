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

function refreshWindowWidth() {
    windowWidth = window.innerWidth;
}

setInterval(refreshWindowWidth, 100);
/* Ecoute du click sur la page pour fermer le menu si l'utilisateur clique en dehors */
let menuHeight = 150; //TEMP
document.addEventListener('click', function (event) {
    if (event.clientY > menuHeight && windowWidth <= 768) { // SI L'UTILISATEUR CLIQUE A UNE HAUTEUR SUPERIEURE A CELLE DU BURGER
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

/*BACK OFFICE DELETE CONFIRMATION*/
// Sélectionner tous les boutons de suppression
let deleteButtons = document.querySelectorAll('.deleteButton');

// Sélectionner tous les boutons de confirmation de suppression
let deleteConfirmationButtons = document.querySelectorAll('.deleteConfirmationButton');

if (deleteButtons) {
    // Parcourir tous les boutons de suppression
    deleteButtons.forEach((deleteButton, index) => {
        // Ajouter un écouteur d'événement pour le clic sur chaque bouton de suppression
        deleteButton.addEventListener('click', () => {
            // Masquer le bouton de confirmation de suppression correspondant
            if (deleteConfirmationButtons[index]) {
                deleteButtons[index].style.display = 'none';
                deleteConfirmationButtons[index].style.display = 'inline';
            }
        });
    });
}

/* SLIDER HIGHLIGHTS */
let highlightsProducts = document.querySelectorAll('.highlights_products');
let autoProductInterval;
let nextArrow = document.getElementById('right_arrow');
if (nextArrow) { nextArrow.addEventListener('click', nextProduct) }
let prevArrow = document.getElementById('left_arrow');
if (prevArrow) { prevArrow.addEventListener('click', prevProduct) }

if (highlightsProducts) {
    highlightsProducts.forEach((product, index) => {
        if (index !== 0) {
            product.classList.add("opacityDown");
        }
    });
}
let index = 0;
function nextProduct() {
    highlightsProducts[index].classList.remove("opacityUp");
    highlightsProducts[index].classList.add("opacityDown");
    index++;
    if (index === highlightsProducts.length) { index = 0; }
    highlightsProducts[index].classList.remove("opacityDown");
    highlightsProducts[index].classList.add("opacityUp");
    clearInterval(autoProductInterval);
    autoProductInterval = setInterval(nextProduct, 2000);
}

function prevProduct() {
    highlightsProducts[index].classList.remove("opacityUp");
    highlightsProducts[index].classList.add("opacityDown");
    if (index === 0) { index = highlightsProducts.length - 1; }
    else { index--; }

    highlightsProducts[index].classList.remove("opacityDown");
    highlightsProducts[index].classList.add("opacityUp");
    clearInterval(autoProductInterval);
    autoProductInterval = setInterval(nextProduct, 2000);
}
/*AUTO SLIDE*/
function autoNextProduct() {
    autoProductInterval = setInterval(nextProduct, 2000);
}
if (highlightsProducts) {
    autoNextProduct();
}