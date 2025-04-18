<head>
  <title>Student System</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php

include 'db.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "UPDATE students SET name = '$name', email = '$email', course = '$course' WHERE id = $id";
    mysqli_query($conn, $sql);
    header("Location: dashboard.php");
}

?>

<div class="container">
<form action="" method="post">
    <h2>Edit Student</h2>
    Name: <input type="text" name="name" value="<?php echo $row['name'];?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>" required><br>
    <input type="submit" value="Update">
</form>
</div>