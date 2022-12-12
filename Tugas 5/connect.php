<?php

$connect = mysqli_connect("localhost", "root", "", "test");

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed : " . $connect->connect_error);
}

?>