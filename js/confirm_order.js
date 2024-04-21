window.addEventListener('DOMContentLoaded', () => {
    const storedCartItems = localStorage.getItem('cartItems');
    if (storedCartItems) {
        basketItems = JSON.parse(storedCartItems);
        cartItemCount = localStorage.getItem('cartItemCount') || 0;
        displayOrderConfirmBasket();
        updateCartItemCountDisplay();
    }
});

function displayOrderConfirmBasket() {
    const OrderConfirmBasketContainer = document.querySelector('.cart-summary');

    // Clear the previous content of the basket
    OrderConfirmBasketContainer.innerHTML = '';

    if (basketItems.length === 0) {
        OrderConfirmBasketContainer.textContent = 'Your cart is empty.';
    } else {
        // Add header for order summary
        const orderSummaryHeader = document.createElement('h4');
        orderSummaryHeader.textContent = 'Order Summary:';
        OrderConfirmBasketContainer.appendChild(orderSummaryHeader);
        OrderConfirmBasketContainer.appendChild(document.createElement('br'));

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
            OrderConfirmBasketContainer.appendChild(listItem);
        });

        displayConfirmTotalCost();

        const confirmOrderClearButtonContainer = document.getElementById('cart-summary-clear-button');

        // Add Clear Cart button
        const confirmOrderClearButton = document.createElement('button');
        confirmOrderClearButton.setAttribute('type', 'button');
        confirmOrderClearButton.classList.add('btn', 'btn-primary', 'ms-2'); // Add Bootstrap classes for styling
        confirmOrderClearButton.textContent = 'Clear Cart'; // Set button text
        confirmOrderClearButton.setAttribute('onclick', 'confirmOrderClearCart()');

        // Append the button element to the payButtonContainer
        confirmOrderClearButtonContainer.appendChild(confirmOrderClearButton);

        //     payButtonAdded = true;
    }
}

function increaseQuantity(index) {
    basketItems[index].quantity++;
    basketItems[index].totalPrice = basketItems[index].price * basketItems[index].quantity;

    if (basketItems[index].quantity > 1) {
        cartItemCount++;
        updateCartItemCountDisplay();
    }

    updateLocalStorage();
    displayBasket();
    location.reload();
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
        location.reload();
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

    location.reload();
    updateLocalStorage();
}

function confirmOrderClearCart() {
    basketItems = []; // Clear the basket
    cartItemCount = 0; // Reset cart item count
    displayBasket(); // Update the display
    // Update the local storage

    // Remove the total cost display
    const confirmOrderTotalCostContainer = document.getElementById('cart-summary-total-cost');
    confirmOrderTotalCostContainer.innerHTML = '';

    // Remove the Pay Now and Clear Cart buttons

    const confirmOrderClearButtonContainer = document.getElementById('cart-summary-clear-button');
    confirmOrderClearButtonContainer.innerHTML = '';

    updateCartItemCountDisplay(); // Update the cart item count display
    updateLocalStorage();
    location.reload();
}

function displayConfirmTotalCost() {
    const confirmOrderTotalCostContainer = document.getElementById('cart-summary-total-cost');
    let totalCost = 0;

    // Calculate the total cost by summing up the prices of all items in the basket
    basketItems.forEach(item => {
        totalCost += parseFloat(item.totalPrice);
    });

    // Display the total cost
    confirmOrderTotalCostContainer.innerHTML = `<div class="total-cost" mb-5><p>Total Cost: €${totalCost.toFixed(2)}</p></div>`;
}


