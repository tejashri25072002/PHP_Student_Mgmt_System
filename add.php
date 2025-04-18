<head>
  <title>Student System</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php

include 'db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
    mysqli_query($conn, $sql);
    header("Location: dashboard.php");
}

?>

<div class="container">
<form action="" method="post">
    <h2>Add Student</h2>
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Course: <input type="text" name="course" required><br>
    <input type="submit" value="Add">
</form>
</div>