<head>
  <title>Student System</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php

include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id = $id";
mysqli_query($conn, $sql);
header("Location: dashboard.php");

?>

