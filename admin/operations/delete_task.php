<?php
// Database connection
require_once('../includes/database.php');

// Get the current date
$currentDate = date("Y-m-d");

// Query to delete job listings with a deletion_date less than or equal to the current date
$sql = "DELETE FROM jobs WHERE delete_date <= '$currentDate'";
$connect->query($sql);

// Close the database connection
$connect->close();

echo "Expired job listings have been removed.";
?>
