<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>

<div class="container-fluid text-center">
    <div class="row">
        <div class="carousel-text col mt-2 mb-2">
            <h1>Welcome to Our Cozy Restaurant!</h1>
            <h4>Here, every visit promises an unforgettable dining experience.</h4>
            <p>Step inside and indulge in a warm atmosphere that feels just like home. As you enter, you'll be greeted by our friendly staff, ready to cater to your every need with a smile.</p>
            <p>At our restaurant, we take pride in serving delicious meals made with the freshest and healthiest ingredients. From farm-fresh vegetables to succulent meats, every dish is prepared with care and attention to detail.</p>
            <p>Our commitment to quality shines through in every bite, making each meal a delightful journey for your taste buds.</p>
            <a href="menu.php" class="btn btn-lg btn-primary">See Menu</a>
        </div>
        <div class="col-lg-8">
            <div class="container-fluid">
                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img src="img/main page slider img/pexels-engin-akyurt-2271107.jpg" class="w-100" alt="burger">
                        </div>
                        <div class="carousel-item">
                            <img src="img/main page slider img/pexels-rajesh-tp-1600727.jpg" class="w-100" alt="burger1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/main page slider img/peter-dawn-sxZ_Ca6MkWM-unsplash.jpg" class="w-100" alt="burger2">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5 mb-5">
    <h2>Choose Your Dining Experience:</h2>
    <div class="row experience-row">
        <div class="col-md-5 mb-3 mt-3 d-flex flex-column experience">

            <div>
                <h3>Eat In</h3>
                <p>It's not just about the food; it's about the experience. Relax and unwind in our inviting dining area, designed to provide the perfect backdrop for your meal.</p>
                <p>Whether you're dining alone, with family, or catching up with friends, our restaurant offers a welcoming ambiance that makes you feel right at home.</p>
                <p>As you savor each mouthwatering dish, you'll feel the passion and dedication that goes into every aspect of our service. From the kitchen to your table, we strive to exceed your expectations and create memories that last a lifetime.</p>
            </div>
            <div class="mt-auto">
                <a href="reservation.php" class="btn btn-primary btn-lg btn-block">Reserve a Table</a>
            </div>

        </div>
        <div class="col-md-5 mb-3 mt-3 d-flex flex-column experience">

            <div>
                <h3>Take Away</h3>
                <p>Indulge in our diverse menu offerings, carefully crafted to satisfy every palate. From hearty burgers to refreshing drinks and salads, there's something for everyone to enjoy.</p>
                <p>Savor the juiciness of our handcrafted patties, made with premium cuts of meat sourced from local farmers who prioritize quality and sustainability.</p>
                <p>From classic cheeseburgers to innovative creations, our menu offers a tantalizing array of options to suit every palate. Bite into perfection and experience the ultimate satisfaction that comes from a truly exceptional burger.</p>
            </div>
            <div class="mt-auto">
                <a href="menu.php" class="btn btn-primary btn-lg btn-block">Order Meal</a>
            </div>

        </div>
    </div>
</div>

<?php include('Templates/footer.php') ?>

</body>

</html>