<?php

$connect = mysqli_connect('localhost', 'jasar', 'secret', 'jasar');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL :' . mysqli_connect_errno());
}
?>