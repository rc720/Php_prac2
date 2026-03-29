<?php
include 'db.php';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO employees (name, email, job_title, salary)
    VALUES ('$name','$email','$job','$salary')";

    if(mysqli_query($conn, $sql)){
        echo "Data Inserted Successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<br><a href="index.php">Back</a>