<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Parking - ParkEase</title>
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

    <!-- Search Form -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Find Parking Spaces</h2>
            <form action="search.php" method="post" class="space-y-4">
                <div>
                    <label for="location" class="block text-gray-700 mb-2">Location</label>
                    <input type="text" id="location" name="location" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter area or landmark">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="date" class="block text-gray-700 mb-2">Date</label>
                        <input type="date" id="date" name="date" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="time" class="block text-gray-700 mb-2">Time</label>
                        <input type="time" id="time" name="time" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
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
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg">Search Parking</button>
            </form>
        </div>

        <!-- Search Results (will be populated by PHP) -->
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // In a real app, you would query a database here
            $location = $_POST['location'] ?? '';
            $date = $_POST['date'] ?? '';
            $time = $_POST['time'] ?? '';
            $duration = $_POST['duration'] ?? '';
            
            // Sample parking spaces data
            $parkingSpaces = [
                [
                    'name' => 'Downtown Parking Garage',
                    'address' => '123 Main St, ' . $location,
                    'distance' => '0.5 miles',
                    'price' => '$3/hour',
                    'available' => '15 spots'
                ],
                [
                    'name' => 'Central Mall Parking',
                    'address' => '456 Center Ave, ' . $location,
                    'distance' => '0.8 miles',
                    'price' => '$2.50/hour',
                    'available' => '8 spots'
                ],
                [
                    'name' => 'City Park Plaza',
                    'address' => '789 Park Blvd, ' . $location,
                    'distance' => '1.2 miles',
                    'price' => '$2/hour',
                    'available' => '22 spots'
                ]
            ];
            
            echo '<div class="max-w-2xl mx-auto mt-12">';
            echo '<h3 class="text-xl font-semibold text-gray-800 mb-6">Available Parking Spaces</h3>';
            
            foreach ($parkingSpaces as $space) {
                echo '<div class="bg-white rounded-lg shadow-md p-6 mb-4">';
                echo '<h4 class="text-lg font-bold text-gray-800 mb-2">' . $space['name'] . '</h4>';
                echo '<p class="text-gray-600 mb-1">' . $space['address'] . '</p>';
                echo '<div class="grid grid-cols-3 gap-4 mt-4">';
                echo '<div><span class="text-gray-500">Distance:</span> ' . $space['distance'] . '</div>';
                echo '<div><span class="text-gray-500">Price:</span> ' . $space['price'] . '</div>';
                echo '<div><span class="text-gray-500">Available:</span> ' . $space['available'] . '</div>';
                echo '</div>';
                echo '<a href="booking.php?location=' . urlencode($space['name']) . '" class="mt-4 inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">Book Now</a>';
                echo '</div>';
            }
            
            echo '</div>';
        }
        ?>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 ParkEase. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>