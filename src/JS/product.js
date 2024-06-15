let itemsQuantityZone = document.getElementById('counter-input');
let incrementButton = document.getElementById('increment-button');
let decrementButton = document.getElementById('decrement-button');

if (incrementButton) {
    incrementButton.addEventListener("click", quantityUp);
}

if (decrementButton) {
    decrementButton.addEventListener("click", quantityDown);
}

function quantityUp() {
    let itemsQuantity = parseInt(itemsQuantityZone.value, 10);
    itemsQuantityZone.value = itemsQuantity + 1;
}

function quantityDown() {
    let itemsQuantity = parseInt(itemsQuantityZone.value, 10);
    if (itemsQuantity > 0) {
        itemsQuantityZone.value = itemsQuantity - 1;
    }
}