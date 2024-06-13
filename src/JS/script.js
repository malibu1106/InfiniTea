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
    autoProductInterval = setInterval(nextProduct, 3000);
}

function prevProduct() {
    highlightsProducts[index].classList.remove("opacityUp");
    highlightsProducts[index].classList.add("opacityDown");
    if (index === 0) { index = highlightsProducts.length - 1; }
    else { index--; }

    highlightsProducts[index].classList.remove("opacityDown");
    highlightsProducts[index].classList.add("opacityUp");
    clearInterval(autoProductInterval);
    autoProductInterval = setInterval(nextProduct, 3000);
}
/*AUTO SLIDE*/
function autoNextProduct() {
    autoProductInterval = setInterval(nextProduct, 3000);
}
if (highlightsProducts.length > 0) {
    autoNextProduct();
}

/* DISPLAY CATEGORIES */
let categoriesButtons = document.querySelectorAll('.categoryButton');
if (categoriesButtons) {
    // Parcourir tous les boutons
    categoriesButtons.forEach((categoriesButton, index) => {
        // Ajouter un écouteur d'événement pour le clic sur chaque bouton
        categoriesButton.addEventListener('click', () => {
            console.log('click');

            // Récupérer l'ID du bouton cliqué
            let buttonId = categoriesButton.id;
            // Construire l'ID de la div correspondante
            let divId = buttonId + '2';
            // Sélectionner la div correspondante
            let targetDiv = document.getElementById(divId);
            // Masquer toutes les divs de catégories
            document.querySelectorAll('.categoryDiv').forEach(div => {
                div.style.display = 'none';
            });
            // Afficher la div correspondante et faire défiler vers elle
            if (targetDiv) {
                targetDiv.style.display = 'block';
                if (windowWidth <= 768) {
                    targetDiv.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    });
}


/* SIGNUP CHECKS */
let form = document.getElementById('signupForm');
let requiredFieldsInForm = form.querySelectorAll('[required]');
let submitButton = document.getElementById('signupButton');
submitButton.style.visibility = "hidden";


// Ajoute un écouteur d'événement "keyup" à chaque champ requis
requiredFieldsInForm.forEach((field) => {
    field.addEventListener("keyup", checkFields);
});

function checkFields() {
    let notValid = 0; // Réinitialise la variable notValid pour chaque vérification

    // Vérifie la longueur de la valeur de chaque champ requis
    for (let i = 0; i < requiredFieldsInForm.length; i++) {
        if (requiredFieldsInForm[i].value.length < 2) {
            notValid++;
        }
    }

    if (document.getElementById('password').value !== document.getElementById('passwordRetyped').value) {
        notValid++;
    }

    // Affiche ou masque le bouton de soumission en fonction de la validité des champs
    if (notValid === 0) {
        submitButton.style.visibility = "visible";
    } else {
        submitButton.style.visibility = "hidden";
    }
}
