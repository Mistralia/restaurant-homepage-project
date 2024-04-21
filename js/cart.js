// Load basketItems from localStorage on page load
window.addEventListener('DOMContentLoaded', () => {
    const storedCartItems = localStorage.getItem('cartItems');
    if (storedCartItems) {
        basketItems = JSON.parse(storedCartItems);
        cartItemCount = localStorage.getItem('cartItemCount') || basketItems.length;
        displayBasket();
        updateCartItemCountDisplay();
    }
});

// Function to update the display of cart item count
function updateCartItemCountDisplay() {
    document.getElementById('cartItemCount').textContent = cartItemCount;
}

// Select all elements with the class 'add-to-basket'
const addToBasketButtons = document.querySelectorAll('.add-to-basket');

// Add event listeners to each button
addToBasketButtons.forEach(button => {
    button.addEventListener('click', function () {
        // Get product name and price from adjacent elements with specified classes
        const productName = this.parentElement.querySelector('.product-name').textContent;
        const priceText = this.parentElement.querySelector('.price').textContent;
        const productPrice = parseFloat(priceText.replace('Price: €', ''));

        // Call addToBasket function with dynamic arguments
        addToBasket(productName, productPrice);
    });
});



// Define an array to store selected items in the basket
let basketItems = [];

let cartItemCount = 0;

// Function to add item to the basket
function addToBasket(itemName, price) {
    // Create an object representing the item

    const item = {
        name: itemName,
        price: price,
        quantity: 1,
        totalPrice: price,
    };

    // Add the item to the basket
    basketItems.push(item);

    // Update cart item count
    cartItemCount++;
    document.getElementById('cartItemCount').textContent = cartItemCount;
    updateLocalStorage();

    // Update the display of the basket
    displayBasket();
}



let payButtonAdded = false;

// Function to update the display of the basket
function displayBasket() {
    const basketContainer = document.getElementById('basket-items');

    // Clear the previous content of the basket
    basketContainer.innerHTML = '';

    if (basketItems.length === 0) {
        basketContainer.textContent = 'Your cart is empty.';
    } else {
        // Add header for order summary
        const orderSummaryHeader = document.createElement('h4');
        orderSummaryHeader.textContent = 'Order Summary:';
        basketContainer.appendChild(orderSummaryHeader);
        basketContainer.appendChild(document.createElement('br'));

        // Loop through the items in the basket and display them
        basketItems.forEach((item, index) => {

            const itemName = item.name.length > 30 ? splitName(item.name) : item.name;

            const listItem = document.createElement('li');
            listItem.innerHTML = `<div class="cart-item-container">
            <div class="cart-item-info">
            <span class="cart-item-name"><input type="hidden" name="itemName[]" value="${item.name}">${index + 1}. ${itemName}</span>
            <span class="cart-item-price"><input type="hidden" name="itemPrice[]" value="${item.price}">€${item.totalPrice.toFixed(2)}</span>
            </div>
            <div class="toggle-item">
            <span class="change-item-amount"><input type="hidden" name="itemQuantity[]" value="${item.quantity}">Change amount:&nbsp;<span class="quantity-buttons"><button class="btn btn-danger decrease-quantity-btn" onclick="decreaseQuantity(${index})">-</button>
            ${item.quantity}
            <button class="btn btn-success increase-quantity-btn" onclick="increaseQuantity(${index})">+</button></span></span>
            <span class="remove-item">Remove:&nbsp;
            <button class="btn btn-secondary remove-btn" onclick="removeItem(${index})">
            <img src="img/shopping cart img/trash.svg" alt="Remove"></button></span>
            </div></div>
            <hr>
        `;

            // Append the item element to the basket container
            basketContainer.appendChild(listItem);
        });

        displayTotalCost();

        if (!payButtonAdded) {
            const payButtonContainer = document.querySelector('.pay-button');

            const payButton = document.createElement('button');
            payButton.setAttribute('type', 'button');
            payButton.classList.add('btn', 'btn-primary'); // Add Bootstrap classes for styling
            payButton.textContent = 'Pay Now'; // Set button text
            payButton.setAttribute('onclick', 'checkout()');

            // Append the button element to the payButtonContainer
            payButtonContainer.appendChild(payButton);

            const removeAllButtonContainer = document.querySelector('.remove-all-button');

            // Add Clear Cart button
            const clearCartButton = document.createElement('button');
            clearCartButton.setAttribute('type', 'button');
            clearCartButton.classList.add('btn', 'btn-primary', 'ms-2'); // Add Bootstrap classes for styling
            clearCartButton.textContent = 'Clear Cart'; // Set button text
            clearCartButton.setAttribute('onclick', 'clearCart()');

            // Append the button element to the payButtonContainer
            removeAllButtonContainer.appendChild(clearCartButton);

            payButtonAdded = true;
        }
    }
}

// Function to increase quantity of an item
function increaseQuantity(index) {
    basketItems[index].quantity++;
    basketItems[index].totalPrice = basketItems[index].price * basketItems[index].quantity;

    if (basketItems[index].quantity > 1) {
        cartItemCount++;
        updateCartItemCountDisplay();
    }

    updateLocalStorage();
    displayBasket();
}

// Function to decrease quantity of an item
function decreaseQuantity(index) {
    if (basketItems[index].quantity > 1) {
        basketItems[index].quantity--;
        basketItems[index].totalPrice = basketItems[index].price * basketItems[index].quantity;

        if (basketItems[index].quantity > 1) {
            cartItemCount--;
            updateCartItemCountDisplay();
        }

        updateLocalStorage();
        displayBasket();
    }
}

// Function to remove an item from the cart
function removeItem(index) {
    basketItems.splice(index, 1);
    displayBasket();

    cartItemCount--;
    document.getElementById('cartItemCount').textContent = cartItemCount;
    if (cartItemCount === 0) {
        const totalCostContainer = document.getElementById('total-cost');
        totalCostContainer.innerHTML = '';

        const payButtonContainer = document.querySelector('.pay-button');
        payButtonContainer.innerHTML = '';

        const removeAllButtonContainer = document.querySelector('.remove-all-button');
        removeAllButtonContainer.innerHTML = '';

        location.reload();
    }
    updateLocalStorage();
}


// Function to clear the cart
function clearCart() {
    basketItems = []; // Clear the basket
    cartItemCount = 0; // Reset cart item count
    displayBasket(); // Update the display
    // Update the local storage

    // Remove the total cost display
    const totalCostContainer = document.getElementById('total-cost');
    totalCostContainer.innerHTML = '';

    // Remove the Pay Now and Clear Cart buttons
    const payButtonContainer = document.querySelector('.pay-button');
    payButtonContainer.innerHTML = '';

    const removeAllButtonContainer = document.querySelector('.remove-all-button');
    removeAllButtonContainer.innerHTML = '';

    updateCartItemCountDisplay(); // Update the cart item count display
    updateLocalStorage();
    location.reload();
}


// Function to split long item names
function splitName(name) {
    const words = name.split(' ');
    let firstLine = '';
    let secondLine = '';

    let splitIndex = words.findIndex(word => word.toLowerCase() === 'with');

    if (splitIndex === -1) {
        splitIndex = Math.ceil(words.length / 2);
    }

    for (let i = 0; i < words.length; i++) {
        if (i < splitIndex) {
            firstLine += words[i] + ' ';
        } else {
            secondLine += words[i] + ' ';
        }
    }

    return `${firstLine.trim()}<br>${secondLine.trim()}`;
}


// Function to calculate and display the total cost
function displayTotalCost() {
    const totalCostContainer = document.getElementById('total-cost');
    let totalCost = 0;

    // Calculate the total cost by summing up the prices of all items in the basket
    basketItems.forEach(item => {
        totalCost += parseFloat(item.totalPrice);
    });

    // Display the total cost
    totalCostContainer.innerHTML = `<div class="total-cost" mb-5><p>Total Cost: €${totalCost.toFixed(2)}</p></div>`;
}

// Function to handle the checkout process
function checkout() {
    // You can implement the checkout process here, such as submitting the basket data to a server for processing
    location.href = 'confirm_order.php';
}

// Function to update localStorage with current basketItems
function updateLocalStorage() {
    localStorage.setItem('cartItems', JSON.stringify(basketItems));
    localStorage.setItem('cartItemCount', cartItemCount);
}








/**
   * Close hamburger menu when clicked outside the header 
*/
document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.querySelector('.navbar');
    const navbarToggler = document.querySelector('.navbar-toggler');

    document.body.addEventListener('click', function (event) {
        const isClickInsideHeader = navbar.contains(event.target);
        const isNavbarTogglerClicked = navbarToggler.contains(event.target);

        if (!isClickInsideHeader && !isNavbarTogglerClicked) {
            closeNavbarMenu();
        }
    });

    function closeNavbarMenu() {
        const navbarCollapse = document.querySelector('.navbar-collapse');

        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
            navbarCollapse.classList.remove('show');
        }
    }
});

