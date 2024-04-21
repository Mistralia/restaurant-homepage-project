<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BurgerHub Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

</head>

<body class="body d-flex flex-column min-vh-100">

    <header class="header">
        <div class="row">
            <div class="col-10 col-md-11 col-sm-10 col-xs-10">
                <nav class="navbar navbar-expand-lg sticky-top">
                    <div class="container-fluid">
                        <a href="index.php" class="navbar-brand mb-0 h1">
                            <img class="d-inline-block align-center" src="img/logo/logo1.png" height="50">
                            BurgerHub
                        </a>
                        <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav me-auto mb-lg-0">
                                <li class="nav-item active">
                                    <a href="index.php" class="nav-link">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a href="menu.php" class="nav-link">
                                        Menu
                                    </a>
                                </li>
                                <!-- <li class="nav-item active">
                        <a href="#" class="nav-link">
                            Gallery
                        </a>
                    </li> -->
                                <li class="nav-item active">
                                    <a href="contacts.php" class="nav-link">
                                        Contacts
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="reservation.php">Reserve a Table</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="menu.php">Take Away</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-2 col-md-1 col-sm-2 col-xs-2 d-flex justify-content-end align-items-top">
                <button class="cart-button btn btn-primary mt-3 mb-3 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <img class="cart-icon" src="img/shopping cart img/shopping-cart.svg" alt="Cart">
                    <sup><span id="cartItemCount">0</span></sup>
                </button>
            </div>
        </div>
    </header>


    <!-- cart -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Your Cart</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="basket-items">
                <p>Your cart is empty.</p>
                <!-- Selected items will be displayed here -->
            </div>
            <div id="total-cost">
            </div>
            <div class="cart-buttons">
                <span class="pay-button"></span><span class="remove-all-button"></span>
            </div>
        </div>
    </div>