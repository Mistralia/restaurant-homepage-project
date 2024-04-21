<?php

include('config/db_connect.php');



$clients_name = $clients_phone = $name = $quantity = $price = $delivery = $payment = '';

$errors = array('clients_name' => '', 'clients_phone' => '');

if (isset($_POST['submit'])) {

    $itemNames = $_POST['itemName'];
    $itemQuantities = $_POST['itemQuantity'];
    $itemPrices = $_POST['itemPrice'];

    $itemDetails = array();
    $totalPrice = 0;

    for ($i = 0; $i < count($itemNames); $i++) {
        $name = $itemNames[$i];
        $quantity = $itemQuantities[$i];
        $price = $itemPrices[$i];

        $itemDetails[] = "$name (x $quantity)";

        $totalPrice += $price * $quantity;
    }

    $itemsString = implode(', ', $itemDetails);


    if (empty($_POST['clients-name'])) {
        $errors['clients_name'] = 'A name is required <br />';
    } else {
        $clients_name = $_POST['clients-name'];
        if (!preg_match('/^[a-z ,.\'-]+$/i', $clients_name)) {
            $errors['clients_name'] = 'Enter a valid name!';
        }
    }

    if (empty($_POST['clients-phone'])) {
        $errors['clients_phone'] = 'A phone number is required <br />';
    } else {
        $clients_phone = $_POST['clients-phone'];
        if (!preg_match('/^[2-9][0-9]{7}$/', $clients_phone)) {
            $errors['clients_phone'] = 'Enter a valid Latvian phone!';
        }
    }


    if (isset($_POST['delivery'])) {
        $delivery = $_POST['delivery'];
    }


    if (isset($_POST['payment'])) {
        $payment = $_POST['payment'];
    }



    if (array_filter($errors)) {
        // Handle errors
    } else {

        $sql = "INSERT INTO Cart (clients_name, cart_items, price, clients_phone, delivery, payment) VALUES ('$clients_name', '$itemsString', '$totalPrice', '$clients_phone', '$delivery', '$payment')";
        if (mysqli_query($conn, $sql)) {
            header('Location: order_result.php?message=success');
            exit();
        } else {
            header('Location: order_result.php?message=error&error=' . urlencode(mysqli_error($conn)));
            exit();
        }
    }
} else {
}


?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>



<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="card confirm-order">
            <div class="card-body">
                <form action="confirm_order.php" method="POST">
                    <h1 class="card-title text-center">Confirm Your Order:</h1>
                    <div class="cart-summary">

                    </div>
                    <div id="cart-summary-total-cost">

                    </div>
                    <div id="cart-summary-clear-button">

                    </div>
                    <h3 class="mt-5">Enter Your Order Information:</h3>
                    <div class="form-group text-center mb-2">
                        <label for="clients-phone">Your Name:</label>
                        <div class="input-group">
                            <input type="text" id="clients-name" class="form-control" name="clients-name" value="<?php echo htmlspecialchars($clients_name) ?>" required>
                        </div>
                        <div class="text-danger">
                            <?php echo $errors['clients_name']; ?>
                        </div>
                    </div>


                    <div class="form-group text-center mb-2">
                        <label for="clients-phone">Your Phone Number:</label>
                        <div class="input-group">
                            <span class="input-group-text">+371</span>
                            <input type="text" id="clients-phone" class="form-control" name="clients-phone" value="<?php echo htmlspecialchars($clients_phone) ?>" required>
                        </div>
                        <div class="text-danger">
                            <?php echo $errors['clients_phone']; ?>
                        </div>
                    </div>


                    <h4>Delivery Option:</h4>
                    <div class="form-check">
                        <input class="form-check-input" id="delivery" type="radio" name="delivery" value="take-away" checked>
                        <label class="form-check-label" for="delivery">
                            Take away (the only option available)
                        </label>
                    </div>
                    <h4>Payment Option:</h4>
                    <div class="form-check">
                        <input class="form-check-input" id="payment" type="radio" name="payment" value="on-site" checked>
                        <label class="form-check-label" for="payment">
                            On site (the only option available)
                        </label>
                    </div>
                    <div class="confirm-order-buttons">
                        <button type="submit" class="btn btn-primary mt-3" name="submit">Place Order!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include('Templates/footer.php') ?>

<script src="js/confirm_order.js"></script>


</body>

</html>