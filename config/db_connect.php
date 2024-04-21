<?php

$conn = mysqli_connect('localhost', '******', '******', 'restaurant');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
