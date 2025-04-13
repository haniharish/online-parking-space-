<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Parking - ParkEase</title>
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

    <!-- Booking Form -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Book Your Parking Space</h2>
            
            <?php
            $location = $_GET['location'] ?? 'Unknown Location';
            echo '<div class="bg-blue-50 p-4 rounded-lg mb-6">';
            echo '<h3 class="font-semibold text-blue-800">' . htmlspecialchars($location) . '</h3>';
            echo '</div>';
            ?>
            
            <form action="confirmation.php" method="post" class="space-y-4">
                <input type="hidden" name="location" value="<?php echo htmlspecialchars($location); ?>">
                
                <div>
                    <label for="name" class="block text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your full name">
                </div>
                
                <div>
                    <label for="email" class="block text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="your@email.com">
                </div>
                
                <div>
                    <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="+1 (123) 456-7890">
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="vehicle_number" class="block text-gray-700 mb-2">Vehicle Number</label>
                        <input type="text" id="vehicle_number" name="vehicle_number" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="ABC 1234">
                    </div>
                    <div>
                        <label for="vehicle_type" class="block text-gray-700 mb-2">Vehicle Type</label>
                        <select id="vehicle_type" name="vehicle_type" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="car">Car</option>
                            <option value="suv">SUV</option>
                            <option value="truck">Truck</option>
                            <option value="motorcycle">Motorcycle</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="date" class="block text-gray-700 mb-2">Date</label>
                        <input type="date" id="date" name="date" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="time" class="block text-gray-700 mb-2">Time</label>
                        <input type="time" id="time" name="time" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                
                <div>
                    <label for="duration" class="block text-gray-700 mb-2">Duration (hours)</label>
                    <select id="duration" name="duration" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="1">1 hour</option>
                        <option value="2">2 hours</option>
                        <option value="3">3 hours</option>
                        <option value="4">4 hours</option>
                        <option value="5">5+ hours</option>
                    </select>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg">Confirm Booking</button>
            </form>
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