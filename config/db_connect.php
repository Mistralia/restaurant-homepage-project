<?php

$conn = mysqli_connect('localhost', 'mistralia', 'test123', 'restaurant');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
