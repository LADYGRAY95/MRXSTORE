<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];

    // Store the new user information in your database
    // Example: Insert the new user into a users table

    // After successful registration, you can redirect to the login page
    header("Location: login.html");
}
?>