<?php

include('config/db_connect.php');

if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM Reservation WHERE id = $id_to_delete";
    if (mysqli_query($conn, $sql)) {
        //success
        $cancellation_message = "Your reservation has been canceled!";
    } else {
        //failure
        $cancellation_message = "Failed to cancel reservation.";
    }
}


// Check if the reservation ID is provided in the URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch reservation details from the database
    $sql = "SELECT * FROM Reservation WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $reservation = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    $datetimeString = $reservation['Date'] . ' ' . $reservation['Time'];

    // Convert the datetime string to a UNIX timestamp
    $timestamp = strtotime($datetimeString);

    // Format the timestamp using the date() function
    $formattedDateTime = date('F j, Y, H:i', $timestamp);
} else {
    if (isset($_POST['delete'])) {
    }
}

if (isset($_GET['check_reservation'])) {
    $email_or_phone = mysqli_real_escape_string($conn, $_GET['email_or_phone']);

    // Query to check if a reservation exists for the provided email or phone
    $sql = "SELECT * FROM Reservation WHERE email = '$email_or_phone' OR phone = '$email_or_phone'";
    $result = mysqli_query($conn, $sql);
    $reservation = mysqli_fetch_assoc($result);

    if ($reservation) {
        // Redirect to a page where the user can view and delete their reservation
        header('Location: reservation_process.php?id=' . $reservation['ID']);
        exit(); // Stop further execution
    }
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>


<div class="container mt-5 mb-5 flex-grow-1">
    <div class="row justify-content-center">
        <?php if (isset($cancellation_message)) : ?>
            <div class="card reservation-card" style="width: 27rem;">
                <div class="card-body text-center">
                    <h5 class="card-title pt-3 pb-3"><?php echo $cancellation_message; ?></h5>
                </div>
            </div>
        <?php else : ?>
            <div class="card reservation-card mt-5" style="width: 27rem;">
                <div class="card-body text-center">
                    <h5 class="card-title mb-4">Your Reservation Details:</h5>
                    <p class="card-text">
                        <?php
                        if ($reservation) {
                            echo '<p><b>Your date and time: </b>' . $formattedDateTime . '</p>';
                            echo '<p><b>Number of guests: </b>' . $reservation['Persons'] . '</p>';
                            echo '<p><b>Location: </b>' . $reservation['In_or_out'] . '</p>';
                            echo '<p><b>Your contacts: </b>' . $reservation['Email'] . ', ' . $reservation['Phone'] . '</p>';

                            echo '<div class="mt-5">';
                            echo '<form action="reservation_process.php" method="POST">';
                            echo '<input type="hidden" name="id_to_delete" value="' . (isset($reservation['ID']) ? $reservation['ID'] : '') . '">';
                            echo '<input type="submit" name="delete" value="Cancel Reservation" class="btn btn-primary">';
                            echo '</form>';
                            echo '</div>';
                        } else {
                            echo "No reservation found for the provided email or phone.";
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>



<?php include('Templates/footer.php') ?>

</body>

</html>