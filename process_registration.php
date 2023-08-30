<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You can perform further validation, sanitization, and database operations here

    // Simulate successful registration
    echo "Registration successful. Welcome, $name!";
} else {
    echo "Invalid request.";
}
?>
