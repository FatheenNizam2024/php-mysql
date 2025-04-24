<?php
include("config.php");
session_start();

// Clear previous errors
unset($_SESSION['error']);
unset($_SESSION['username_error']);
unset($_SESSION['password_error']);

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate empty fields
    if(empty($name)) {
        $_SESSION['username_error'] = "Username required";
    }
    if(empty($password)) {
        $_SESSION['password_error'] = "Password required";
    }

    // If any field is empty, redirect back
    if(empty($name) || empty($password)) {
        header("Location: login.php");
        exit();
    }

    // Check credentials if fields are filled
    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Incorrect username or password";
        header("Location: login.php");
        exit();
    }
}
?>
