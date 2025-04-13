<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ParkEase</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: rgba(0, 0, 255, 0.1);
        }
        .login-container {
            background: rgba(0, 0, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .car-animation {
            animation: drive 8s linear infinite;
        }
        @keyframes drive {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100vw); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center overflow-hidden ">
    <!-- Animated Car Background -->
    

    <!-- Login Form -->
    <div class="login-container rounded-xl shadow-2xl p-8 max-w-md w-full mx-4 z-10 animate__animated animate__fadeIn">
        <!-- Logo -->
        <div class="flex justify-center mb-8">
            <div class="bg-white p-3 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                </svg>
            </div>
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center text-white mb-2">Welcome Back!</h1>
        <p class="text-center text-blue-100 mb-8">Sign in to book your parking spot</p>

        <!-- Login Form -->
        <form action="process_login.php" method="POST" class="space-y-6">
            <!-- Email -->
            <div>
                <label for="email" class="block text-white mb-2">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required 
                    placeholder="your@email.com" 
                    class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 transition duration-300"
                >
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-white mb-2">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    required 
                    placeholder="••••••••" 
                    class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-20 border border-white border-opacity-30 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 transition duration-300"
                >
            </div>

            <!-- Remember Me & Forgot Password -->
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="remember" 
                        name="remember" 
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-white rounded"
                    >
                    <label for="remember" class="ml-2 block text-sm text-white">Remember me</label>
                </div>
                <a href="forgot.php" class="text-sm text-blue-200 hover:text-white transition duration-300">Forgot password?</a>
            </div>

            <!-- Login Button -->
            <a  href="index.php" 
            class="block w-full bg-white text-blue-600 py-3 px-4 rounded-lg font-bold text-center hover:bg-blue-50 transition duration-300 shadow-lg">Log in</a>
   
        </form>

        <!-- Social Login -->
        <div class="mt-8">
            <p class="text-center text-blue-100 mb-4">Or sign in with</p>
            <div class="flex justify-center space-x-4">
                <a href="#" class="bg-white p-3 rounded-full shadow hover:bg-gray-100 transition duration-300">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#" class="bg-white p-3 rounded-full shadow hover:bg-gray-100 transition duration-300">
                    <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12.48 10.92v3.28h7.84c-.24 1.84-.853 3.187-1.787 4.133-1.147 1.147-2.933 2.4-6.053 2.4-4.827 0-8.6-3.893-8.6-8.72s3.773-8.72 8.6-8.72c2.6 0 4.507 1.027 5.907 2.347l2.307-2.307C18.747 1.44 16.133 0 12.48 0 5.867 0 .307 5.387.307 12s5.56 12 12.173 12c3.573 0 6.267-1.173 8.373-3.36 2.16-2.16 2.84-5.213 2.84-7.667 0-.76-.053-1.467-.173-2.053H12.48z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Sign Up Link -->
        <p class="text-center text-blue-100 mt-8">
            Don't have an account? 
            <a href="register.php" class="text-white font-semibold hover:underline transition duration-300">Sign up</a>
        </p>
    </div>

    <!-- Footer -->
    <footer class="absolute bottom-4 w-full text-center text-black text-sm font-extrabold">
        &copy; 2025 ParkEase. All rights reserved.
    </footer>
</body>
</html>