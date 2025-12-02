{{-- <h1>Free Free Palestine</h1> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span class="text-xl font-bold text-gray-800">Service System</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Welcome to Service Management System</h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    A complete Laravel-based admin and user panel system with service management capabilities.
                </p>
                <div class="space-x-4">
                    <a href="{{ route('login') }}" 
                       class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition text-lg">
                        Get Started
                    </a>
                    <a href="{{ route('register') }}" 
                       class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition text-lg">
                        Create Account
                    </a>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-users text-blue-500 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">User Management</h3>
                    <p class="text-gray-600">Complete CRUD operations for user management with secure authentication.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-cogs text-green-500 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Service Management</h3>
                    <p class="text-gray-600">Create, manage, and track services with pricing and descriptions.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-chart-bar text-yellow-500 text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Dashboard Analytics</h3>
                    <p class="text-gray-600">Comprehensive dashboard with statistics and recent activities.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html> --}}







{{-- <h1>Free Free Palestine</h1> --}}
{{-- <h1>Free Free Palestine</h1> --}}
{{-- <h1>Free Free Palestine</h1> --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceHub Pro | Admin & User Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        /* Mobile Menu Overlay */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Mobile Sidebar */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100%;
            background: white;
            z-index: 1000;
            transition: left 0.3s ease;
            box-shadow: 5px 0 25px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .mobile-sidebar.active {
            left: 0;
        }
        
        /* Close button animation */
        .close-menu {
            transition: transform 0.3s ease;
        }
        
        .close-menu:hover {
            transform: rotate(90deg);
        }
        
        /* Menu item animation */
        .menu-item {
            transition: all 0.2s ease;
        }
        
        .menu-item:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transform: translateX(5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileOverlay"></div>
    
    <!-- Mobile Sidebar -->
    <div class="mobile-sidebar" id="mobileSidebar">
        <div class="p-6">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800">ServiceHub<span class="text-blue-600">Pro</span></span>
                </div>
                <button class="close-menu text-gray-600 hover:text-red-500 text-2xl" id="closeMenu">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Sidebar Menu -->
            <div class="space-y-2">
                <a href="#features" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-star mr-3 text-blue-500"></i>
                    Features
                </a>
                <a href="#how-it-works" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-play-circle mr-3 text-green-500"></i>
                    How It Works
                </a>
                <a href="#benefits" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-check-circle mr-3 text-purple-500"></i>
                    Benefits
                </a>
                <div class="border-t border-gray-200 my-4"></div>
                <a href="{{ route('login') }}" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-sign-in-alt mr-3 text-blue-600"></i>
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="menu-item block px-4 py-3 rounded-lg text-white font-medium gradient-bg mt-4">
                    <i class="fas fa-user-plus mr-3"></i>
                    Get Started
                </a>
            </div>
            
            <!-- Sidebar Footer -->
            <div class="mt-12 pt-6 border-t border-gray-200">
                <div class="text-center text-gray-600 text-sm">
                    <p class="mb-3">Available 24/7 Support</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-gray-500 hover:text-blue-600">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-800">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-700">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">ServiceHub<span class="text-blue-600">Pro</span></span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-blue-600 transition font-medium">Features</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition font-medium">How It Works</a>
                    <a href="#benefits" class="text-gray-600 hover:text-blue-600 transition font-medium">Benefits</a>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">Sign In</a>
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300 font-medium">
                            Get Started <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <button class="md:hidden text-gray-600 text-2xl" id="openMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>


<!-- Hero Section -->
<section class="pt-40 pb-40 hero-gradient text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- Left Content -->
            <div>
                <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-5">
                    <i class="fas fa-rocket mr-2"></i> Enterprise-Ready Platform
                </span>

                <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-5">
                    Streamline Your<br>
                    <span class="text-yellow-300">Service Management</span>
                </h1>

                <p class="text-lg text-blue-100 mb-7 leading-relaxed">
                    A complete Laravel-based solution for modern businesses. Manage users, services, and requests with our powerful admin and user panel system.
                </p>

                <div class="flex flex-col sm:flex-row sm:space-x-5 space-y-4 sm:space-y-0">
                    <a href="{{ route('register') }}" 
                       class="bg-white text-blue-600 px-7 py-3 rounded-lg text-lg font-semibold hover:shadow-xl transition-all duration-300 flex items-center justify-center">
                        <i class="fas fa-rocket mr-3"></i>
                        Start Free Trial
                    </a>

                    <a href="#features" 
                       class="border-2 border-white text-white px-7 py-3 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 flex items-center justify-center">
                        <i class="fas fa-play-circle mr-3"></i>
                        Watch Demo
                    </a>
                </div>

                <div class="mt-7 flex items-center space-x-4">
                    <div class="flex -space-x-3">
                        <div class="w-9 h-9 rounded-full bg-blue-300 border-2 border-white"></div>
                        <div class="w-9 h-9 rounded-full bg-purple-300 border-2 border-white"></div>
                        <div class="w-9 h-9 rounded-full bg-pink-300 border-2 border-white"></div>
                        <div class="w-9 h-9 rounded-full bg-green-300 border-2 border-white flex items-center justify-center">
                            <span class="text-xs font-bold">+50</span>
                        </div>
                    </div>
                    <span class="text-blue-100 text-sm md:text-base">Trusted by 50+ businesses worldwide</span>
                </div>
            </div>

            <!-- Right Side Image -->
            <div class="flex justify-center">
                <div class="overflow-hidden rounded-2xl shadow-2xl max-w-md hover:scale-105 transition-all duration-500">
                    <img src="{{asset('img/img6.png')}}" 
                         alt="Service Dashboard"
                         class="w-full h-auto object-cover">
                </div>
            </div>

        </div>
    </div>
</section>




    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block gradient-bg text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                    ✨ POWERFUL FEATURES
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Everything You Need in<br>
                    <span class="text-transparent bg-clip-text gradient-bg">One Platform</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From user management to service tracking, we provide all the tools to run your business efficiently.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Role-Based Access Control</h3>
                    <p class="text-gray-600 mb-6">
                        Secure authentication with admin and user roles. Granular permissions for different user types.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Multi-role system</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Secure login system</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Password encryption</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Service Management</h3>
                    <p class="text-gray-600 mb-6">
                        Complete CRUD operations for services. Set prices, descriptions, and manage availability.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Add/Edit/Delete services</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Price management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Service categorization</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-pie text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Dashboard Analytics</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive dashboard with real-time statistics and insights about your business.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Real-time metrics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Activity tracking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Data visualization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block gradient-bg text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                    🚀 HOW IT WORKS
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Get Started in<br>
                    <span class="text-transparent bg-clip-text gradient-bg">4 Simple Steps</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    1
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Create Your Account</h3>
                                <p class="text-gray-600">
                                    Sign up as either a regular user or request admin access. Get instant access to your personalized dashboard.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    2
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Explore Services</h3>
                                <p class="text-gray-600">
                                    Browse through available services, view pricing, and select the ones that fit your needs.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    3
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Make Requests</h3>
                                <p class="text-gray-600">
                                    Submit service requests with additional notes. Track the status of your requests in real-time.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    4
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Manage Everything</h3>
                                <p class="text-gray-600">
                                    Admins can manage users, services, and requests from a single, intuitive dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-2xl p-8">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-bold text-gray-900">Quick Stats</h3>
                            <span class="px-4 py-2 bg-green-100 text-green-600 rounded-full text-sm font-medium">
                                Live Data
                            </span>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">User Registration</span>
                                    <span class="font-bold text-blue-600">85%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Service Utilization</span>
                                    <span class="font-bold text-purple-600">72%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 72%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Request Completion</span>
                                    <span class="font-bold text-green-600">94%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 94%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Ready to Transform Your<br>
                <span class="text-yellow-300">Service Management?</span>
            </h2>
            <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                Join thousands of businesses that have streamlined their operations with ServiceHub Pro. No credit card required for trial.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="{{ route('register') }}" 
                   class="bg-white text-blue-600 px-10 py-5 rounded-xl text-lg font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-3"></i>
                    Start 14-Day Free Trial
                </a>
                <a href="{{ route('login') }}" 
                   class="border-2 border-white text-white px-10 py-5 rounded-xl text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-sign-in-alt mr-3"></i>
                    Sign In to Existing Account
                </a>
            </div>
            <p class="mt-8 text-blue-100">
                <i class="fas fa-shield-alt mr-2"></i>
                Enterprise-grade security • 99.9% Uptime • 24/7 Support
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                            <i class="fas fa-cogs text-white text-xl"></i>
                        </div>
                        <span class="text-2xl font-bold">ServiceHub<span class="text-blue-400">Pro</span></span>
                    </div>
                    <p class="text-gray-400 mb-6">
                        A complete Laravel-based admin and user panel system for modern businesses.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Product</h3>
                    <ul class="space-y-3">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition">Features</a></li>
                        <li><a href="#how-it-works" class="text-gray-400 hover:text-white transition">How It Works</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">API Documentation</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Company</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-lg font-bold mb-6">Support</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Community</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">System Status</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Security</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 ServiceHub Pro. All rights reserved.</p>
                <p class="mt-2">Made with ❤️ for businesses worldwide, Design by Md Jasim</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 gradient-bg rounded-full shadow-lg text-white hover:shadow-xl transition-all duration-300 hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile Menu Functionality
        const openMenuBtn = document.getElementById('openMenu');
        const closeMenuBtn = document.getElementById('closeMenu');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        
        // Function to close mobile menu
        function closeMobileMenu() {
            mobileSidebar.classList.remove('active');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = ''; // Restore scrolling
        }
        
        // Function to check if screen is mobile
        function isMobileScreen() {
            return window.innerWidth < 768; // md breakpoint in Tailwind
        }
        
        // Function to handle window resize
        function handleResize() {
            if (!isMobileScreen()) {
                // If screen is larger than mobile, close the mobile menu
                closeMobileMenu();
            }
        }
        
        // Open mobile menu
        openMenuBtn.addEventListener('click', () => {
            if (isMobileScreen()) {
                mobileSidebar.classList.add('active');
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            }
        });
        
        // Close mobile menu with close button
        closeMenuBtn.addEventListener('click', closeMobileMenu);
        
        // Close mobile menu when clicking overlay
        mobileOverlay.addEventListener('click', closeMobileMenu);
        
        // Close menu when clicking on menu links
        document.querySelectorAll('.mobile-sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                setTimeout(closeMobileMenu, 300); // Small delay for smooth transition
            });
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileSidebar.classList.contains('active')) {
                closeMobileMenu();
            }
        });
        
        // Listen for window resize to auto-close menu on larger screens
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                handleResize();
            }, 250); // Debounce resize events
        });
        
        // Initial check on page load
        window.addEventListener('DOMContentLoaded', () => {
            if (!isMobileScreen() && mobileSidebar.classList.contains('active')) {
                closeMobileMenu();
            }
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scroll for navigation links (desktop)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    </script>
</body>
</html> --}}





{{-- <h1>Free Free Palestine</h1> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceHub Pro | Admin & User Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .hero-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        /* Mobile Menu Overlay */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .mobile-menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }
        
        /* Mobile Sidebar */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100%;
            background: white;
            z-index: 1000;
            transition: left 0.3s ease;
            box-shadow: 5px 0 25px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        
        .mobile-sidebar.active {
            left: 0;
        }
        
        /* Close button animation */
        .close-menu {
            transition: transform 0.3s ease;
        }
        
        .close-menu:hover {
            transform: rotate(90deg);
        }
        
        /* Menu item animation */
        .menu-item {
            transition: all 0.2s ease;
        }
        
        .menu-item:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transform: translateX(5px);
        }
        
        /* Hero image animation */
        .hero-image-container {
            overflow: hidden;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            transition: all 0.5s ease;
        }
        
        .hero-image-container:hover {
            transform: scale(1.05);
            box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.3);
        }
        
        /* Statistics card animation */
        .stats-card {
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobileOverlay"></div>
    
    <!-- Mobile Sidebar -->
    <div class="mobile-sidebar" id="mobileSidebar">
        <div class="p-6">
            <!-- Sidebar Header -->
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-xl"></i>
                    </div>
                    <span class="text-xl font-bold text-gray-800">ServiceHub<span class="text-blue-600">Pro</span></span>
                </div>
                <button class="close-menu text-gray-600 hover:text-red-500 text-2xl" id="closeMenu">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            
            <!-- Sidebar Menu -->
            <div class="space-y-2">
                <a href="#features" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-star mr-3 text-blue-500"></i>
                    Features
                </a>
                <a href="#how-it-works" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-play-circle mr-3 text-green-500"></i>
                    How It Works
                </a>
                <a href="#benefits" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-check-circle mr-3 text-purple-500"></i>
                    Benefits
                </a>
                <div class="border-t border-gray-200 my-4"></div>
                <a href="{{ route('login') }}" class="menu-item block px-4 py-3 rounded-lg text-gray-700 hover:text-white font-medium">
                    <i class="fas fa-sign-in-alt mr-3 text-blue-600"></i>
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="menu-item block px-4 py-3 rounded-lg text-white font-medium gradient-bg mt-4">
                    <i class="fas fa-user-plus mr-3"></i>
                    Get Started
                </a>
            </div>
            
            <!-- Sidebar Footer -->
            <div class="mt-12 pt-6 border-t border-gray-200">
                <div class="text-center text-gray-600 text-sm">
                    <p class="mb-3">Available 24/7 Support</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-gray-500 hover:text-blue-600">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-600">
                            <i class="fab fa-facebook text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-800">
                            <i class="fab fa-github text-lg"></i>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-700">
                            <i class="fab fa-linkedin text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 gradient-bg rounded-lg flex items-center justify-center">
                        <i class="fas fa-cogs text-white text-xl"></i>
                    </div>
                    <span class="text-2xl font-bold text-gray-800">ServiceHub<span class="text-blue-600">Pro</span></span>
                </div>
                <!-- Changed from md:flex to lg:flex to show burger on tablet -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-blue-600 transition font-medium">Features</a>
                    <a href="#how-it-works" class="text-gray-600 hover:text-blue-600 transition font-medium">How It Works</a>
                    <a href="#benefits" class="text-gray-600 hover:text-blue-600 transition font-medium">Benefits</a>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-blue-600 transition font-medium">Sign In</a>
                        <a href="{{ route('register') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition-all duration-300 font-medium">
                            Get Started <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Changed from md:hidden to lg:hidden to show burger on tablet -->
                <button class="lg:hidden text-gray-600 text-2xl" id="openMenu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-40 pb-40 hero-gradient text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                <!-- Left Content -->
                <div>
                    <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium mb-5">
                        <i class="fas fa-rocket mr-2"></i> Enterprise-Ready Platform
                    </span>

                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight mb-5">
                        Streamline Your<br>
                        <span class="text-yellow-300">Service Management</span>
                    </h1>

                    <p class="text-lg text-blue-100 mb-7 leading-relaxed">
                        A complete Laravel-based solution for modern businesses. Manage users, services, and requests with our powerful admin and user panel system.
                    </p>

                    <div class="flex flex-col sm:flex-row sm:space-x-5 space-y-4 sm:space-y-0">
                        <a href="{{ route('register') }}" 
                           class="bg-white text-blue-600 px-7 py-3 rounded-lg text-lg font-semibold hover:shadow-xl transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-rocket mr-3"></i>
                            Start Free Trial
                        </a>

                        <a href="#features" 
                           class="border-2 border-white text-white px-7 py-3 rounded-lg text-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-300 flex items-center justify-center">
                            <i class="fas fa-play-circle mr-3"></i>
                            Watch Demo
                        </a>
                    </div>

                    <div class="mt-7 flex items-center space-x-4">
                        <div class="flex -space-x-3">
                            <div class="w-9 h-9 rounded-full bg-blue-300 border-2 border-white"></div>
                            <div class="w-9 h-9 rounded-full bg-purple-300 border-2 border-white"></div>
                            <div class="w-9 h-9 rounded-full bg-pink-300 border-2 border-white"></div>
                            <div class="w-9 h-9 rounded-full bg-green-300 border-2 border-white flex items-center justify-center">
                                <span class="text-xs font-bold">+50</span>
                            </div>
                        </div>
                        <span class="text-blue-100 text-sm md:text-base">Trusted by 50+ businesses worldwide</span>
                    </div>
                </div>

                <!-- Right Side Image -->
                <div class="flex justify-center">
                    <div class="hero-image-container max-w-md">
                        <img src="{{asset('img/img6.png')}}" 
                             alt="Service Dashboard"
                             class="w-full h-auto object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block gradient-bg text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                    <i class="fas fa-star mr-2"></i> POWERFUL FEATURES
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Everything You Need in<br>
                    <span class="text-transparent bg-clip-text gradient-bg">One Platform</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From user management to service tracking, we provide all the tools to run your business efficiently.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100 stats-card">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-user-shield text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Role-Based Access Control</h3>
                    <p class="text-gray-600 mb-6">
                        Secure authentication with admin and user roles. Granular permissions for different user types.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Multi-role system</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Secure login system</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Password encryption</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100 stats-card">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Service Management</h3>
                    <p class="text-gray-600 mb-6">
                        Complete CRUD operations for services. Set prices, descriptions, and manage availability.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Add/Edit/Delete services</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Price management</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Service categorization</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl card-hover border border-gray-100 stats-card">
                    <div class="w-16 h-16 gradient-bg rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-pie text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Dashboard Analytics</h3>
                    <p class="text-gray-600 mb-6">
                        Comprehensive dashboard with real-time statistics and insights about your business.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Real-time metrics</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Activity tracking</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check-circle text-green-500 mr-3"></i>
                            <span>Data visualization</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-20 bg-gradient-to-b from-white to-blue-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block gradient-bg text-white px-6 py-2 rounded-full text-sm font-medium mb-4">
                    <i class="fas fa-project-diagram mr-2"></i> HOW IT WORKS
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">
                    Get Started in<br>
                    <span class="text-transparent bg-clip-text gradient-bg">4 Simple Steps</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="space-y-8">
                        <!-- Step 1 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    1
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Create Your Account</h3>
                                <p class="text-gray-600">
                                    Sign up as either a regular user or request admin access. Get instant access to your personalized dashboard.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    2
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Explore Services</h3>
                                <p class="text-gray-600">
                                    Browse through available services, view pricing, and select the ones that fit your needs.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    3
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Make Requests</h3>
                                <p class="text-gray-600">
                                    Submit service requests with additional notes. Track the status of your requests in real-time.
                                </p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start space-x-6">
                            <div class="flex-shrink-0">
                                <div class="w-14 h-14 gradient-bg rounded-full flex items-center justify-center text-white text-xl font-bold">
                                    4
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">Manage Everything</h3>
                                <p class="text-gray-600">
                                    Admins can manage users, services, and requests from a single, intuitive dashboard.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-white rounded-2xl shadow-2xl p-8 stats-card">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-bold text-gray-900">Quick Stats</h3>
                            <span class="px-4 py-2 bg-green-100 text-green-600 rounded-full text-sm font-medium">
                                Live Data
                            </span>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">User Registration</span>
                                    <span class="font-bold text-blue-600">85%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Service Utilization</span>
                                    <span class="font-bold text-purple-600">72%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 72%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="text-gray-600">Request Completion</span>
                                    <span class="font-bold text-green-600">94%</span>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-3">
                                    <div class="gradient-bg h-3 rounded-full" style="width: 94%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-14 lg:py-20 gradient-bg text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <h2 class="text-3xl lg:text-4xl font-bold mb-4">
                Ready to Transform Your<br>
                <span class="text-yellow-300">Service Management?</span>
            </h2>

            <p class="text-lg text-blue-100 mb-8 max-w-2xl mx-auto">
                Join thousands of businesses that have streamlined their operations with ServiceHub Pro. 
                No credit card required for trial.
            </p>

            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">

                <a href="{{ route('register') }}" 
                class="bg-white text-blue-600 px-6 py-3 rounded-xl text-base font-semibold 
                        hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Start 14-Day Free Trial
                </a>

                <a href="{{ route('login') }}" 
                class="border-2 border-white text-white px-6 py-3 rounded-xl text-base font-semibold 
                        hover:bg-white hover:text-blue-600 transition-all duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i>
                    Sign In to Existing Account
                </a>
            </div>

            <p class="mt-6 text-blue-100 text-sm lg:text-base">
                <i class="fas fa-shield-alt mr-2"></i>
                Enterprise-grade security • 99.9% Uptime • 24/7 Support
            </p>

        </div>
    </section>


    <!-- Enhanced Footer -->
<footer class="bg-gradient-to-br from-gray-900 to-black text-white pt-16 pb-12 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-500 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>
    </div>

    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Newsletter Section -->
        <div class="bg-gradient-to-r from-blue-900/30 to-purple-900/30 backdrop-blur-sm rounded-2xl p-8 mb-12 border border-white/10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-3xl font-bold mb-4">Stay Updated</h2>
                    <p class="text-blue-200">Subscribe to our newsletter for the latest updates and features.</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <input type="email" 
                           placeholder="Enter your email" 
                           class="flex-grow px-6 py-4 rounded-xl bg-white/10 border border-white/20 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:shadow-xl hover:scale-105 transition-all duration-300">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer Links Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <!-- Company Info -->
            <div>
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center shadow-lg">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-bold">ServiceHub<span class="text-blue-400">Pro</span></span>
                        <p class="text-sm text-blue-300 mt-1">Professional Service Management</p>
                    </div>
                </div>
                <p class="text-gray-400 mb-6 leading-relaxed">
                    A complete Laravel-based admin and user panel system designed to streamline your business operations and enhance productivity.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-900/30 to-blue-800/20 rounded-xl flex items-center justify-center hover:bg-blue-600 hover:scale-110 transition-all duration-300 border border-white/10">
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-900/30 to-blue-800/20 rounded-xl flex items-center justify-center hover:bg-blue-700 hover:scale-110 transition-all duration-300 border border-white/10">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-900/30 to-blue-800/20 rounded-xl flex items-center justify-center hover:bg-gray-800 hover:scale-110 transition-all duration-300 border border-white/10">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-900/30 to-blue-800/20 rounded-xl flex items-center justify-center hover:bg-red-600 hover:scale-110 transition-all duration-300 border border-white/10">
                        <i class="fab fa-youtube text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Product Links -->
            <div>
                <h3 class="text-xl font-bold mb-6 pb-3 border-b border-white/10 flex items-center">
                    <i class="fas fa-cube mr-3 text-blue-400"></i>
                    Product
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="#features" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Features
                        </a>
                    </li>
                    <li>
                        <a href="#how-it-works" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            How It Works
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Pricing
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            API Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Release Notes
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Company Links -->
            <div>
                <h3 class="text-xl font-bold mb-6 pb-3 border-b border-white/10 flex items-center">
                    <i class="fas fa-building mr-3 text-purple-400"></i>
                    Company
                </h3>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Careers
                            <span class="ml-2 px-2 py-1 bg-gradient-to-r from-purple-600 to-pink-600 text-xs rounded-full">We're hiring</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Press
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-purple-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Support & Contact -->
            <div>
                <h3 class="text-xl font-bold mb-6 pb-3 border-b border-white/10 flex items-center">
                    <i class="fas fa-headset mr-3 text-green-400"></i>
                    Support
                </h3>
                <ul class="space-y-4 mb-8">
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-green-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Help Center
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-green-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Community
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-green-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            System Status
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 hover:text-white transition-all duration-300 flex items-center group">
                            <i class="fas fa-chevron-right mr-3 text-green-500 opacity-0 group-hover:opacity-100 transition-all duration-300"></i>
                            Security
                        </a>
                    </li>
                </ul>
                
                <!-- Contact Info -->
                <div class="bg-gradient-to-r from-gray-800/50 to-gray-900/50 rounded-xl p-5 border border-white/10">
                    <h4 class="font-semibold mb-3 flex items-center">
                        <i class="fas fa-phone-alt mr-2 text-blue-400"></i>
                        Contact Info
                    </h4>
                    <p class="text-sm text-gray-400 mb-2">
                        <i class="fas fa-envelope mr-2"></i>
                        support@servicehubpro.com
                    </p>
                    <p class="text-sm text-gray-400">
                        <i class="fas fa-clock mr-2"></i>
                        24/7 Support Available
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-white/10 pt-8 mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
                <!-- Copyright -->
                <div class="text-gray-500 text-center md:text-left">
                    <p class="text-sm">
                        &copy; 2024 ServiceHub Pro. All rights reserved. 
                        <span class="text-gray-400 ml-2">Made with <i class="fas fa-heart text-red-500 mx-1"></i> for businesses worldwide</span>
                    </p>
                </div>

                <!-- Legal Links -->
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors duration-300">
                        Privacy Policy
                    </a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors duration-300">
                        Terms of Service
                    </a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors duration-300">
                        Cookie Policy
                    </a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors duration-300">
                        GDPR Compliance
                    </a>
                </div>
            </div>

            <!-- Designer Credit -->
            <div class="mt-8 text-center">
                <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-900/30 to-purple-900/30 px-6 py-3 rounded-full border border-white/10">
                    <div class="w-8 h-8 gradient-bg rounded-full flex items-center justify-center">
                        <i class="fas fa-palette text-white"></i>
                    </div>
                    <span class="text-gray-400 text-sm">
                        Crafted with passion by <span class="text-blue-300 font-semibold">Md Jasim</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600"></div>
    
    <!-- Floating Back to Top Button -->
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
            class="fixed bottom-6 right-6 w-14 h-14 gradient-bg rounded-full shadow-2xl text-white hover:scale-110 transition-all duration-300 flex items-center justify-center z-50 border-2 border-white/20">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>
</footer>

<style>
    /* Add these styles to your existing style tag */
    /* .gradient-bg {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    } */
    
    /* Custom hover effects for social icons */
    .social-icon {
        position: relative;
        overflow: hidden;
    }
    
    .social-icon::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        transform: translate(-50%, -50%);
        transition: width 0.3s, height 0.3s;
    }
    
    .social-icon:hover::before {
        width: 100%;
        height: 100%;
    }
    
    /* Custom scrollbar for footer */
    footer ::-webkit-scrollbar {
        width: 6px;
    }
    
    footer ::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 3px;
    }
    
    footer ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #667eea, #764ba2);
        border-radius: 3px;
    }
</style>

<script>
    // Smooth scroll for footer links
    document.querySelectorAll('footer a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Newsletter form handling
    document.querySelector('footer button').addEventListener('click', function() {
        const emailInput = document.querySelector('footer input[type="email"]');
        if (emailInput.value) {
            // Here you would typically make an API call
            alert('Thank you for subscribing! We\'ll keep you updated.');
            emailInput.value = '';
        } else {
            emailInput.focus();
        }
    });
</script>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 w-12 h-12 gradient-bg rounded-full shadow-lg text-white hover:shadow-xl transition-all duration-300 hidden">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Mobile Menu Functionality
        const openMenuBtn = document.getElementById('openMenu');
        const closeMenuBtn = document.getElementById('closeMenu');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const mobileOverlay = document.getElementById('mobileOverlay');
        
        // Function to close mobile menu
        function closeMobileMenu() {
            mobileSidebar.classList.remove('active');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = ''; // Restore scrolling
        }
        
        // Function to check if screen is mobile or tablet (less than 1024px)
        function isMobileOrTabletScreen() {
            return window.innerWidth < 1024; // lg breakpoint in Tailwind (1024px)
        }
        
        // Function to handle window resize
        function handleResize() {
            if (!isMobileOrTabletScreen()) {
                // If screen is larger than tablet, close the mobile menu
                closeMobileMenu();
            }
        }
        
        // Open mobile menu
        openMenuBtn.addEventListener('click', () => {
            if (isMobileOrTabletScreen()) {
                mobileSidebar.classList.add('active');
                mobileOverlay.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            }
        });
        
        // Close mobile menu with close button
        closeMenuBtn.addEventListener('click', closeMobileMenu);
        
        // Close mobile menu when clicking overlay
        mobileOverlay.addEventListener('click', closeMobileMenu);
        
        // Close menu when clicking on menu links
        document.querySelectorAll('.mobile-sidebar a').forEach(link => {
            link.addEventListener('click', () => {
                setTimeout(closeMobileMenu, 300); // Small delay for smooth transition
            });
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileSidebar.classList.contains('active')) {
                closeMobileMenu();
            }
        });
        
        // Listen for window resize to auto-close menu on larger screens
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                handleResize();
            }, 250); // Debounce resize events
        });
        
        // Initial check on page load
        window.addEventListener('DOMContentLoaded', () => {
            if (!isMobileOrTabletScreen() && mobileSidebar.classList.contains('active')) {
                closeMobileMenu();
            }
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
        
        // Hero image hover effect for desktop
        const heroImage = document.querySelector('.hero-image-container');
        if (heroImage) {
            heroImage.addEventListener('mouseenter', () => {
                if (window.innerWidth >= 1024) {
                    heroImage.style.transform = 'scale(1.05)';
                    heroImage.style.boxShadow = '0 35px 60px -15px rgba(0, 0, 0, 0.3)';
                }
            });
            
            heroImage.addEventListener('mouseleave', () => {
                if (window.innerWidth >= 1024) {
                    heroImage.style.transform = 'scale(1)';
                    heroImage.style.boxShadow = '0 25px 50px -12px rgba(0, 0, 0, 0.25)';
                }
            });
        }
    </script>
</body>
</html>