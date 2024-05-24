<?php

$conn = mysqli_connect('localhost', 'root', '', 'registeruser');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Success";
}

?>
