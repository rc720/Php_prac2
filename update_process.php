<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$job = $_POST['job'];
$salary = $_POST['salary'];

$sql = "UPDATE employees SET 
name='$name', email='$email', job_title='$job', salary='$salary'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
    echo "Updated Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

<br><a href="display.php">Back</a>