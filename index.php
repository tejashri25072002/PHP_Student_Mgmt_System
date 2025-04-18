<head>
  <title>Student System</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin123" ) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<p>Invalid Credentials</p>";
    }
}

?>

<div class="container">
<form method = "POST">
    <h2><u><b>STUDENT MANAGEMENT SYSTEM</b></u></h2>
    <h2>Login</h2>
    UserName: <input type="text" name="username" required> <br>
    Password: <input type="password" name="password" required> <br>
    <input type="submit" value="Login">
</form>
</div>
