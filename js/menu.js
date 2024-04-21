


// DRINK MODAL
const drinkModal = document.getElementById('drink-modal');

// Get the button that opens the modal
const drinkModalTriggerButtons = document.querySelectorAll('.drink-modal-trigger-btn');

// Get the <span> element that closes the modal
const drinkModalClose = document.getElementById("drink-modal-close");

const insideDrinkModalBtn = document.querySelector('.inside-drink-modal-btn');

// When the user clicks the button, open the modal
drinkModalTriggerButtons.forEach(button => {
    // Add click event listener to each modal trigger button
    button.addEventListener('click', function () {
        // Open the modal
        drinkModal.style.display = "block";
    });
});


// When the user clicks on <span> (x), close the modal
drinkModalClose.onclick = function () {
    drinkModal.style.display = "none";
}



// Function to handle Choose Drink Size button click
document.querySelectorAll('.drink-modal-trigger-btn').forEach(button => {
    button.addEventListener('click', function () {
        // Get the parent container of the button
        const drinkContainer = button.closest('.col-md-4');

        // Get the drink name and price from the parent container
        const drinkName = drinkContainer.querySelector('.drink-name').textContent;
        const drinkPriceText = drinkContainer.querySelector('.drink-price').textContent;
        const drinkPrice = parseFloat(drinkPriceText.replace('Price: €', ''));

        // Store the drink information in the data attributes of the modal content
        const modalContent = document.querySelector('.drink-modal-content');
        modalContent.dataset.drinkName = drinkName;
        modalContent.dataset.drinkPrice = drinkPrice;

        // Open the modal
        drinkModal.style.display = "block";
    });
});

// Function to handle Add to Basket button click inside the modal
document.querySelectorAll('.inside-drink-modal-btn').forEach(button => {
    button.addEventListener('click', function () {
        // Retrieve the stored drink information from the modal content
        const drinkName = document.querySelector('.drink-modal-content').dataset.drinkName;
        const drinkPrice = parseFloat(document.querySelector('.drink-modal-content').dataset.drinkPrice);

        // Get selected drink size
        const drinkSize = document.getElementById("drink-modal-drink-size").value;

        // Adjust final product price based on drink size
        let finalProductPrice = drinkPrice;
        if (drinkSize === 'Medium') {
            finalProductPrice += 0.30;
        } else if (drinkSize === 'Large') {
            finalProductPrice += 0.60;
        }

        finalProductPrice = Number(finalProductPrice.toFixed(2));

        // Add the selected drink preferences to the basket
        addToBasketFromDrinkModal(drinkSize, drinkName, finalProductPrice);

        // Close the modal after adding to basket
        drinkModal.style.display = "none";
    });
});

function addToBasketFromDrinkModal(drinkSize, drinkType, productPrice) {
    // Construct the item description based on selected preferences
    const itemDescription = `${drinkSize} ${drinkType}`;

    // Add the item to the basketItems array
    const item = {
        name: itemDescription,
        price: productPrice,
        quantity: 1,
        totalPrice: productPrice,
    };

    basketItems.push(item);

    cartItemCount++;
    document.getElementById('cartItemCount').textContent = cartItemCount;

    // Update the display of the basket
    displayBasket();
    updateLocalStorage();
}





// BURGER SET MODALS

const setNameElement = document.querySelector('.set-name');
const setName = setNameElement.textContent;

const modifiedName = setName.replace(/\s*Set\s*/i, '');

const insertBurgerName = document.querySelector('.insert-burger-name');

const newName = document.createElement('p');
// Set the text content of the new element to modifiedName
newName.textContent = modifiedName;

// Append the new element to the insertBurgerName container
insertBurgerName.appendChild(newName);




// GET THE SET MODAL
const mealModal = document.getElementById('meal-modal');

// Get the buttons that open the modal
const mealModalTriggerButtons = document.querySelectorAll('.meal-modal-trigger-btn');

// Get the <span> element that closes the modal
const mealModalClose = document.getElementById("meal-modal-close");

const insideMealModalBtn = document.querySelector('.inside-meal-modal-btn');


mealModalTriggerButtons.forEach(button => {
    button.addEventListener('click', function () {

        const mealContainer = button.closest('.meal-item');
        const mealName = mealContainer.querySelector('.set-name').textContent;
        const setPriceText = mealContainer.querySelector('.set-price').textContent;
        const setPrice = parseFloat(setPriceText.replace('Price: €', ''));

        // Store the meal information in the data attributes of the modal content
        const modalContent = mealModal.querySelector('.meal-modal-content');
        modalContent.dataset.mealName = mealName;
        modalContent.dataset.setPrice = setPrice;

        // Open the modal
        mealModal.style.display = "block";
    });
});

// When the user clicks on <span> (x), close the modal
mealModalClose.onclick = function () {
    mealModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == mealModal) {
        mealModal.style.display = "none";
    } else if (event.target == drinkModal) {
        drinkModal.style.display = "none";
    }
}




insideMealModalBtn.addEventListener('click', function () {
    // Get the parent container of the button
    const modalContent = mealModal.querySelector('.meal-modal-content');
    const mealName = modalContent.dataset.mealName;
    const setPrice = parseFloat(modalContent.dataset.setPrice);

    const friesSize = document.getElementById("fries-size").value;
    const drinkType = document.getElementById("drink-type").value;
    const drinkSize = document.getElementById("drink-size").value;

    let finalProductPrice = setPrice; // Initialize with base price
    if ((friesSize === 'Small' && drinkSize === 'Medium') ||
        (friesSize === 'Medium' && drinkSize === 'Small')) {
        finalProductPrice += 0.30;
    } else if (friesSize === 'Medium' && drinkSize === 'Medium') {
        finalProductPrice += 0.60;
    } else if ((friesSize === 'Small' && drinkSize === 'Large') ||
        (friesSize === 'Large' && drinkSize === 'Small')) {
        finalProductPrice += 0.60;
    } else if ((friesSize === 'Medium' && drinkSize === 'Large') ||
        (friesSize === 'Large' && drinkSize === 'Medium')) {
        finalProductPrice += 0.90;
    } else if (friesSize === 'Large' && drinkSize === 'Large') {
        finalProductPrice += 1.20;
    }

    finalProductPrice = Number(finalProductPrice.toFixed(2));

    // Add selected preferences to the basket
    addToBasketFromMealModal(mealName, friesSize, drinkSize, drinkType, finalProductPrice);

    // Close the modal
    mealModal.style.display = "none";
});



function addToBasketFromMealModal(mealName, friesSize, drinkSize, drinkType, productPrice) {
    // Construct the item description based on selected preferences
    const itemDescription = `${mealName} with ${friesSize} Fries and ${drinkSize} ${drinkType}`;

    // Add the item to the basketItems array
    const item = {
        name: itemDescription,
        price: productPrice,
        quantity: 1,
        totalPrice: productPrice,
    };

    basketItems.push(item);

    cartItemCount++;
    document.getElementById('cartItemCount').textContent = cartItemCount;

    // Update the display of the basket
    displayBasket();
    updateLocalStorage();
}
