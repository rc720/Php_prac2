<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>

<h2>Add Employee</h2>

<form action="insert.php" method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Job Title: <input type="text" name="job"><br><br>
    Salary: <input type="number" name="salary"><br><br>
    <input type="submit" value="Add Employee">
</form>

<br>
<a href="display.php">View Employees</a>

</body>
</html>