<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "Deleted Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<br><a href="display.php">Back</a>