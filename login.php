<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verify the username and password against your database
    // Example: Check if the user exists and the password is correct
    if ($username == "example" && $password == "password") {
        // Authentication successful
        $_SESSION["username"] = $username;
        header("Location: welcome.php"); // Redirect to a welcome page
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>