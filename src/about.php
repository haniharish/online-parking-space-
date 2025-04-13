<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ParkEase</title>
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
                <a href="about.php" class="px-3 hover:text-blue-200">About</a>
            </div>
        </div>
    </nav>

    <!-- About Us Section -->
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">About ParkEase</h2>
            
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Our Story</h3>
                <p class="text-gray-600 mb-4">
                    ParkEase was founded in 2025 with a simple mission: to make parking stress-free. 
                    Our team of developers noticed how much time people waste searching for parking spots, 
                    and we decided to create a solution that saves time and reduces frustration.
                </p>
                <p class="text-gray-600">
                    Today, ParkEase helps thousands of users find and book parking spaces in advance, 
                    ensuring a smooth experience when they reach their destination.
                </p>
            </div>

           

            <!-- Features Section -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Key Features</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>Real-Time Availability:</strong> Check parking spots in real-time.</li>
                    <li><strong>Easy Booking:</strong> Reserve your spot in just a few clicks.</li>
                    <li><strong>Multiple Locations:</strong> Find parking near malls, offices, and airports.</li>
                    <li><strong>Price Comparison:</strong> Compare rates before booking.</li>
                    <li><strong>Secure Payments:</strong> Safe and hassle-free transactions.</li>
                </ul>
            </div>

            <!-- Advantages Section -->
            <div class="bg-white rounded-lg shadow-md p-8 mb-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Why Choose ParkEase?</h3>
                <ul class="list-disc pl-6 space-y-2 text-gray-600">
                    <li><strong>Saves Time:</strong> No more driving around looking for parking.</li>
                    <li><strong>Cost-Effective:</strong> Get the best rates with no hidden charges.</li>
                    <li><strong>24/7 Support:</strong> Assistance whenever you need it.</li>
                    <li><strong>Eco-Friendly:</strong> Reduces unnecessary fuel consumption.</li>
                    <li><strong>User-Friendly:</strong> Simple interface for all ages.</li>
                </ul>
            </div>

            <!-- Query Form -->
            <div class="bg-white rounded-lg shadow-md p-8">
                <h3 class="text-xl font-semibold text-gray-800 mb-6">Have Questions? Contact Us!</h3>
                <form action="submit_query.php" method="post" class="space-y-4">
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                        <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">Send Message</button>
                </form>
            </div>
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