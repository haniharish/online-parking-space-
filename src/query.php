<?php
// Enable error reporting (for debugging)
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Submitted - ParkEase</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">ParkEase</h1>
            <div>
                <a href="index.php" class="px-3 hover:text-blue-200">Home</a>
                <a href="search.php" class="px-3 hover:text-blue-200">Find Parking</a>
                <a href="about.php" class="px-3 hover:text-blue-200">About</a>
            </div>
        </div>
    </nav>

    <!-- Confirmation Message -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8 text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Query Submitted Successfully!</h2>
            <p class="text-gray-600 mb-6">Thank you for contacting us. We'll get back to you soon.</p>
            
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $subject = htmlspecialchars($_POST['subject']);
                $message = htmlspecialchars($_POST['message']);

                echo '<div class="text-left bg-gray-50 p-6 rounded-lg mb-6">';
                echo '<h3 class="font-semibold text-lg mb-4">Your Query Details</h3>';
                echo '<p><strong>Name:</strong> ' . $name . '</p>';
                echo '<p><strong>Email:</strong> ' . $email . '</p>';
                echo '<p><strong>Subject:</strong> ' . $subject . '</p>';
                echo '<p><strong>Message:</strong> ' . $message . '</p>';
                echo '</div>';

                // TODO: Save to database or send email (see next steps)
            }
            ?>
            
            <a href="index.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">
                Back to Home
            </a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 ParkEase. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>