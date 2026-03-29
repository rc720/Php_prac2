<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM employees");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>

<h2>Employee List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Job</th>
    <th>Salary</th>
    <th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['job_title']; ?></td>
    <td><?php echo $row['salary']; ?></td>
    <td>
        <a href="update.php?id=<?php echo $row['id']; ?>">Update</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Add New Employee</a>

</body>
</html>