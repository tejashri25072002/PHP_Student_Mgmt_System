<head>
  <title>Student System</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php

session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}

include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students");

?>

<div class="container">
<a href="add.php">Add Student</a> | <a href="logout.php">Logout</a>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)) {
        ?>

    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
</table>
</div>