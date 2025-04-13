<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - ParkEase</title>
    <link href="output.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">ParkEase</h1>
            <div>
                <a href="index.php" class="px-3 hover:text-blue-200">Home</a>
                <a href="search.php" class="px-3 hover:text-blue-200">Find Parking</a>
                <a href="#" class="px-3 hover:text-blue-200">About</a>
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
            
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Booking Confirmed!</h2>
            <p class="text-gray-600 mb-6">Thank you for your booking. Here are your details:</p>
            
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo '<div class="text-left bg-gray-50 p-6 rounded-lg mb-6">';
                echo '<h3 class="font-semibold text-lg mb-4">Booking Summary</h3>';
                
                echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-2">';
                echo '<div><span class="text-gray-500">Location:</span> ' . htmlspecialchars($_POST['location']) . '</div>';
                echo '<div><span class="text-gray-500">Name:</span> ' . htmlspecialchars($_POST['name']) . '</div>';
                echo '</div>';
                
                echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-2">';
                echo '<div><span class="text-gray-500">Date:</span> ' . htmlspecialchars($_POST['date']) . '</div>';
                echo '<div><span class="text-gray-500">Time:</span> ' . htmlspecialchars($_POST['time']) . '</div>';
                echo '</div>';
                
                echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-2">';
                echo '<div><span class="text-gray-500">Duration:</span> ' . htmlspecialchars($_POST['duration']) . ' hours</div>';
                echo '<div><span class="text-gray-500">Vehicle:</span> ' . htmlspecialchars($_POST['vehicle_type']) . ' (' . htmlspecialchars($_POST['vehicle_number']) . ')</div>';
                echo '</div>';
                
                // Generate a random booking reference
                $booking_ref = 'PARK-' . strtoupper(substr(md5(uniqid()), 0, 8));
                echo '<div class="mt-4 pt-4 border-t">';
                echo '<span class="text-gray-500">Booking Reference:</span> <span class="font-bold">' . $booking_ref . '</span>';
                echo '</div>';
                
                echo '</div>';
                
                echo '<p class="text-gray-600 mb-6">A confirmation has been sent to ' . htmlspecialchars($_POST['email']) . '</p>';
            } else {
                echo '<div class="bg-yellow-50 p-4 rounded-lg mb-6">';
                echo '<p class="text-yellow-800">No booking information found. Please start a new booking.</p>';
                echo '</div>';
            }
            ?>
            
            <a href="index.php" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Back to Home</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 ParkEase. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>