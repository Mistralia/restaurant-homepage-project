<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>

<div class="container mt-5 mb-5">

    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="burgers-tab" data-bs-toggle="tab" data-bs-target="#burgers-tab-pane" type="button" role="tab" aria-controls="burgers-tab-pane" aria-selected="true">Burgers</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="sides-tab" data-bs-toggle="tab" data-bs-target="#sides-tab-pane" type="button" role="tab" aria-controls="sides-tab-pane" aria-selected="false">Sides</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="drinks-tab" data-bs-toggle="tab" data-bs-target="#drinks-tab-pane" type="button" role="tab" aria-controls="drinks-tab-pane" aria-selected="false">Drinks</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="meals-tab" data-bs-toggle="tab" data-bs-target="#meals-tab-pane" type="button" role="tab" aria-controls="meals-tab-pane" aria-selected="false">Meals</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="burgers-tab-pane" role="tabpanel" aria-labelledby="burgers-tab" tabindex="0">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Hamburger</h2>
                        <img src="img/burger images/hamburger.png" width="50%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €1.79</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Cheeseburger</h2>
                        <img src="img/burger images/cheeseburger.png" width="50%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €2.09</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Double Cheeseburger</h2>
                        <img src="img/burger images/double-cheeseburger.png" width="50%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €2.99</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Crispy Fish Burger</h2>
                        <img src="img/burger images/fish-burger.png" width="60%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, crispy fish fillet, lettuce leaves, sliced tomatoes, sliced onions, pickles, tartar sauce</p>
                        <p class="price">Price: €3.99</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Crispy Chicken Burger</h2>
                        <img src="img/burger images/chicken-burger.png" width="60%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, crispy chicken patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €4.49</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Salmon Burger</h2>
                        <img src="img/burger images/salmon-burger.png" width="60%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled salmon patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, tartar sauce</p>
                        <p class="price">Price: €4.99</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Turkey Burger</h2>
                        <img src="img/burger images/turkey-burger.png" width="60%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled turkey patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €4.99</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Bacon & Egg Burger</h2>
                        <img src="img/burger images/bacon-egg-burger.png" width="60%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, bacon, fried egg, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €4.49</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Veggie Burger</h2>
                        <img src="img/burger images/veggie-burger1.png" width="50%" class="align-middle">
                        <p><b>Ingredients:</b> Sesame seed bun, veggie patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, ketchup, mustard, mayonnaise</p>
                        <p class="price">Price: €2.99</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="sides-tab-pane" role="tabpanel" aria-labelledby="sides-tab" tabindex="0">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Small Fries</h2>
                        <img src="img/sides images/small-fries.png" width="50%">
                        <p><b>Ingredients:</b> Potatoes, vegetable oil, salt</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Medium Fries</h2>
                        <img src="img/sides images/medium-fries.png" width="50%">
                        <p><b>Ingredients:</b> Potatoes, vegetable oil, salt</p>
                        <p class="price">Price: €1.69</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Large Fries</h2>
                        <img src="img/sides images/large-fries.png" width="50%">
                        <p><b>Ingredients:</b> Potatoes, vegetable oil, salt</p>
                        <p class="price">Price: €2.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Onion Rings</h2>
                        <img src="img/sides images/onion-rings.png" width="50%">
                        <p><b>Ingredients:</b> Onion rings, flour, breadcrumbs, eggs, salt, pepper, vegetable oil</p>
                        <p class="price">Price: €3.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Mozzarella Sticks</h2>
                        <img src="img/sides images/mozzarella-sticks.png" width="50%">
                        <p><b>Ingredients:</b> Mozzarella cheese sticks, flour, eggs, breadcrumbs, salt, pepper, vegetable oil</p>
                        <p class="price">Price: €3.49</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Coleslaw</h2>
                        <img src="img/sides images/coleslaw.png" width="60%">
                        <p><b>Ingredients:</b> Shredded cabbage, shredded carrots, mayonnaise, vinegar, sugar, salt, pepper</p>
                        <p class="price">Price: €1.79</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Ketchup</h2>
                        <img src="img/sides images/ketchup.png" width="30%">
                        <p><b>Ingredients:</b> Tomatoes, sugar, vinegar, salt, onion powder, garlic powder, spices</p>
                        <p class="price">Price: €0.29</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Mustard</h2>
                        <img src="img/sides images/mustard.png" width="30%">
                        <p><b>Ingredients:</b> Mustard seeds, vinegar, water, salt, spices</p>
                        <p class="price">Price: €0.29</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Barbeque Sauce</h2>
                        <img src="img/sides images/bbq-sauce.png" width="30%">
                        <p><b>Ingredients:</b> Tomato puree, vinegar, brown sugar, molasses, Worcestershire sauce, spices, onion powder, garlic powder, salt</p>
                        <p class="price">Price: €0.29</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="drinks-tab-pane" role="tabpanel" aria-labelledby="drinks-tab" tabindex="0">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="drink-name">Coca-Cola</h2>
                        <img src="img/drinks images/cola.png" width="20%">
                        <p class="drink-price">Price: €1.19</p>
                        <button class="btn btn-primary drink-modal-trigger-btn">Choose Drink Size</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="drink-name">Sprite</h2>
                        <img src="img/drinks images/sprite.png" width="20%">
                        <p class="drink-price">Price: €1.19</p>
                        <button class="btn btn-primary drink-modal-trigger-btn">Choose Drink Size</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="drink-name">Fanta</h2>
                        <img src="img/drinks images/fanta.png" width="37%">
                        <p class="drink-price">Price: €1.19</p>
                        <button class="btn btn-primary drink-modal-trigger-btn">Choose Drink Size</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Orange Juice</h2>
                        <img src="img/drinks images/orange-juice.png" width="40%">
                        <p><b>Ingredients:</b> Fresh oranges, water</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Apple Juice</h2>
                        <img src="img/drinks images/apple-juice.png" width="45%">
                        <p><b>Ingredients:</b> Fresh apples, water</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Coffee</h2>
                        <img src="img/drinks images/coffee.png" width="40%">
                        <p><b>Ingredients:</b> Coffee beans, water</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Tea</h2>
                        <img src="img/drinks images/tea.png" width="40%">
                        <p><b>Ingredients:</b> Black tea, lemon, water</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Hot Chocolate</h2>
                        <img src="img/drinks images/hot-chocolate.png" width="50%">
                        <p><b>Ingredients:</b> Cocoa powder, sugar, milk, whipped cream</p>
                        <p class="price">Price: €1.19</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <h2 class="product-name">Bottled Water</h2>
                        <img src="img/drinks images/bottled-water.png" width="25%">
                        <p><b>Ingredients:</b> Water</p>
                        <p class="price">Price: €0.59</p>
                        <button class="btn btn-primary add-to-basket">Add to Basket</button>
                    </div>

                    <div id="drink-modal" class="modal">
                        <div class="modal-content drink-modal-content">
                            <span id="drink-modal-close" class="close">&times;</span>
                            <h2>Drink Preferences</h2>
                            <label for="drink-modal-drink-size">Drink Size:</label>
                            <select id="drink-modal-drink-size">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium (+€0.30)</option>
                                <option value="Large">Large (+€0.60)</option>
                            </select>
                            <button class="btn btn-primary mt-3 inside-drink-modal-btn">Add to Basket</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="meals-tab-pane" role="tabpanel" aria-labelledby="meals-tab" tabindex="0">
            <div class="container">
                <div class="row justify-content-center mt-5 mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="row meal-item">
                            <div class="col">
                                <h2 class="set-name">Hamburger Set</h2>
                            </div>
                            <div class="col"><img src="img/set images/hamburger.png" width="50%"></div>
                            <div class="col">
                                <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            </div>
                            <div class="col">
                                <p class="set-price">Price: €3.99</p>
                            </div>
                            <div class="col"><button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="row meal-item">
                            <div class="col">
                                <h2 class="set-name">Cheeseburger Set</h2>
                            </div>
                            <div class="col"> <img src="img/set images/cheeseburger.png" width="50%"></div>
                            <div class="col">
                                <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            </div>
                            <div class="col">
                                <p class="set-price">Price: €4.29</p>
                            </div>
                            <div class="col"> <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="row meal-item">
                            <div class="col">
                                <h2 class="set-name">Double Cheeseburger Set</h2>
                            </div>
                            <div class="col"><img src="img/set images/double-cheeseburger.png" width="50%"></div>
                            <div class="col">
                                <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            </div>
                            <div class="col">
                                <p class="set-price">Price: €5.19</p>
                            </div>
                            <div class="col"><button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Crispy Fish Burger Set</h2>
                            <img src="img/set images/fish-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, crispy fish fillet, lettuce leaves, sliced tomatoes, sliced onions, pickles, tartar sauce + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €6.19</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Crispy Chicken Burger Set</h2>
                            <img src="img/set images/chicken-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, crispy chicken patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €6.69</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Salmon Burger Set</h2>
                            <img src="img/set images/salmon-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, grilled salmon patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, tartar sauce + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €7.19</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Turkey Burger Set</h2>
                            <img src="img/set images/turkey-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, grilled turkey patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €7.19</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Bacon & Egg Burger Set</h2>
                            <img src="img/set images/bacon-egg-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, grilled beef patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, cheese, bacon, fried egg, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €6.69</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center mb-4">
                        <div class="meal-item">
                            <h2 class="set-name">Veggie Burger Set</h2>
                            <img src="img/set images/veggie-burger.png" width="50%">
                            <p><b>Ingredients:</b> Sesame seed bun, veggie patty, lettuce leaves, sliced tomatoes, sliced onions, pickles, ketchup, mustard, mayonnaise + Potatoes, vegetable oil, salt + Soda drink</p>
                            <p class="set-price">Price: €5.19</p>
                            <button class="btn btn-primary meal-modal-trigger-btn">Choose Preferences</button>
                        </div>
                    </div>

                    <div id="meal-modal" class="modal">
                        <div class="modal-content meal-modal-content">
                            <span id="meal-modal-close" class="close">&times;</span>
                            <h2>Meal Preferences</h2>
                            <p class="insert-burger-name"></p>
                            <label for="fries-size">Fries Size:</label>
                            <select id="fries-size">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium (+€0.30)</option>
                                <option value="Large">Large (+€0.60)</option>
                            </select>
                            <label for="drink-type">Drink Type:</label>
                            <select id="drink-type">
                                <option value="Coca-Cola">Coca-Cola</option>
                                <option value="Sprite">Sprite</option>
                                <option value="Fanta">Fanta</option>
                            </select>
                            <label for="drink-size">Drink Size:</label>
                            <select id="drink-size">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium (+€0.30)</option>
                                <option value="Large">Large (+€0.60)</option>
                            </select>
                            <button class="btn btn-primary mt-3 inside-meal-modal-btn">Add to Basket</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('Templates/footer.php') ?>


<script src="js/menu.js"></script>

</body>

</html>