<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>

<div class="container mt-5 mb-5 flex-grow-1">
    <div class="row justify-content-center">
        <div class="card" style="width: 45rem;">
            <div class="card-body">
                <?php
                // Check if there is a message parameter in the URL
                if (isset($_GET['message'])) {
                    if ($_GET['message'] === 'success') {
                        echo '<h1 class="card-title text-center success">Your order has been placed successfully!</h1>
                        <p class="text-center mb-1">We will notify you when it\'s ready for pick up.</p>
                        <p class="text-center">Thank you for choosing our restaurant!</p>';
                    } elseif ($_GET['message'] === 'error') {
                        echo '<h1 class="card-title text-center failure">Error placing your order</h1>';
                        echo '<p class="text-center">' . $_GET['error'] . '</p>';
                    }
                } else {
                    // Default message if no message parameter is provided
                    echo '<h1 class="card-title text-center">Thank you for visiting us!</h1>';
                }
                ?>
            </div>
        </div>
    </div>
</div>


<?php include('Templates/footer.php') ?>

<script src="js/order_result.js"></script>


</body>

</html>