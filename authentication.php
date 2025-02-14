<?php
session_start();
include "test_input.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"] ?? "");
    $password = test_input($_POST["password"] ?? "");

    if ($username === $password && !empty($username)) {
        $_SESSION["user"] = $username;
        header("Location: checkout.php");
        exit();
    } else {
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <h2>Customer Login</h2>
            <h4>Please input a valid username and password to proceed with your purchase</h4>
            <p style="color:red;">An incorrect login will automatically redirect you back to the homepage</p>
            Username: <input type="text" name="username" required /><br>
            <br>
            Password: <input type="password" name="password" required /><br>
            <br>
            <input type="submit">
            </body>
            </html>
