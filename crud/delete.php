<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM data WHERE id=$id");

// After deleting data, reset the auto increment
$result = mysqli_query($mysqli, "ALTER TABLE data AUTO_INCREMENT = 1");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>
