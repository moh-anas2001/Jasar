<?php

$connect = mysqli_connect('localhost', 'jasarsxx_jasar', 'Jasar@db', 'jasarsxx_jasar');

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL :' . mysqli_connect_errno());
}
?>