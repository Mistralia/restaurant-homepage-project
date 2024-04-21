<?php

$conn = mysqli_connect('localhost', 'fnulswmy_tati', 'nyanyancat389', 'fnulswmy_Restaurant');

if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
