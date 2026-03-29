<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM employees WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<form action="update_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Job: <input type="text" name="job" value="<?php echo $row['job_title']; ?>"><br><br>
    Salary: <input type="number" name="salary" value="<?php echo $row['salary']; ?>"><br><br>
    
    <input type="submit" value="Update">
</form>
