
const successH1 = document.querySelector('.success');

if (successH1) {
    clearCart();
}


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
}

