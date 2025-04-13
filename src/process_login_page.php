<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']);

    // Validate inputs (in a real app, check against database)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Simulate successful login (replace with database check)
    if ($email === "user@example.com" && $password === "password123") {
        // Start session
        session_start();
        $_SESSION['user_email'] = $email;
        
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect back with error
        header("Location: login.php?error=invalid_credentials");
        exit();
    }
} else {
    // Redirect if accessed directly
    header("Location: login.php");
    exit();
}
?>