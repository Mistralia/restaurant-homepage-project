<?php

include('config/db_connect.php');



$persons = $email = $phone = $date = $time = '';

$errors = array('persons' => '', 'email' => '', 'phone' => '');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $date = htmlspecialchars($_POST["date"]);
    $time = htmlspecialchars($_POST["time"]);
    $persons = htmlspecialchars($_POST["persons"]);
    if (!preg_match('/^[1-6]$/', $persons)) {
        $errors['persons'] = 'Enter a number of guests from 1 to 6!';
    }
    $location = htmlspecialchars($_POST["location"]);
    $email = htmlspecialchars($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid e-mail address!';
    }
    $phone = htmlspecialchars($_POST["phone"]);
    if (!preg_match('/^[2-9][0-9]{7}$/', $phone)) {
        $errors['phone'] =  'Enter a valid Latvian phone number!';
    }

    if (array_filter($errors)) {
    } else {
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $persons = mysqli_real_escape_string($conn, $_POST['persons']);
        $location = mysqli_real_escape_string($conn, $_POST['location']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $sql = "INSERT INTO Reservation (date, time, persons, in_or_out, email, phone) VALUES ('$date', '$time', '$persons', '$location', '$email', '$phone')";

        if (mysqli_query($conn, $sql)) {
            $new_reservation_id = mysqli_insert_id($conn);
            header('Location: reservation_process.php?id=' . $new_reservation_id);
            exit();
        } else {
            echo 'query error ' . mysqli_error($conn);
        }
    }
}




?>


<!DOCTYPE html>
<html lang="en">

<?php include('Templates/header.php') ?>


<div class="container mt-5 mb-5 reservation-form-container flex-grow-1">
    <h2>Table Reservation</h2>
    <p>Fill out the form to reserve a table:</p>

    <form action="reservation.php" method="POST">
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" value='<?php echo htmlspecialchars($date) ?>' required>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time" value='<?php echo htmlspecialchars($time) ?>' required>
        </div>

        <div class="form-group">
            <label for="persons">Number of Persons:</label>
            <input type="number" class="form-control" id="persons" name="persons" value='<?php echo htmlspecialchars($persons) ?>' required>
            <div class="text-danger">
                <?php echo $errors['persons']; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="location">Inside or Outside:</label>
            <select class="form-control" id="location" name="location" required>
                <option value="Inside">Inside</option>
                <option value="Outside">Outside</option>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Your E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" value='<?php echo htmlspecialchars($email) ?>' required>
            <div class="text-danger">
                <?php echo $errors['email']; ?>
            </div>
        </div>

        <div class="form-group text-center">
            <label for="phone">Your Phone Number:</label>
            <div class="input-group">
                <span class="input-group-text" id="basic-addon">+371</span>
                <input type="text" class="form-control" id="phone" name="phone" value='<?php echo htmlspecialchars($phone) ?>' aria-describedby="basic-addon" required>
            </div>
            <div class="text-danger">
                <?php echo $errors['phone']; ?>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="submit" value="submit">Submit Reservation</button>
    </form>
</div>

<div class="container mt-5 mb-5 check-reservation-container">
    <h4>Already have a reservation?</h4>
    <h5>Enter your email or phone and see your reservation details or cancel it!</h5>
    <form action="reservation_process.php" method="GET">
        <div class="form-group">
            <label for="email_or_phone">Enter Your Email or Phone:</label>
            <input type="text" class="form-control" id="email_or_phone" name="email_or_phone" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3" name="check_reservation" value="check_reservation">Check Reservation</button>
    </form>
</div>

<?php include('Templates/footer.php') ?>

</html>