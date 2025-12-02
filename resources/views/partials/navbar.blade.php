{{-- <nav class="bg-blue-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('user.dashboard') }}" 
                   class="text-xl font-bold">
                    {{ auth()->user()->isAdmin() ? 'Admin Panel' : 'User Panel' }}
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <span class="text-blue-100">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-lg transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav> --}}




{{-- <nav class="bg-blue-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-8">
                <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('user.dashboard') }}" 
                   class="text-xl font-bold">
                    {{ auth()->user()->isAdmin() ? 'Admin Panel' : 'User Panel' }}
                </a>
                
                @if(auth()->user()->isAdmin())
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.users.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.users.*') ? 'bg-blue-700' : '' }}">
                        Users
                    </a>
                    <a href="{{ route('admin.services.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.services.*') ? 'bg-blue-700' : '' }}">
                        Services
                    </a>
                    <a href="{{ route('admin.service-requests.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.service-requests.*') ? 'bg-blue-700' : '' }}">
                        Service Requests
                    </a>
                </div>
                @endif
            </div>

            <div class="flex items-center space-x-4">
                <span class="text-blue-100">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-lg transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav> --}}






<nav class="bg-blue-600 text-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-8">
                <a href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('user.dashboard') }}" 
                   class="text-xl font-bold">
                    {{ auth()->user()->isAdmin() ? 'Admin Panel' : 'User Panel' }}
                </a>
                
                @if(auth()->user()->isAdmin())
                <div class="hidden md:flex space-x-4">
                    <a href="{{ route('admin.dashboard') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.dashboard') ? 'bg-blue-700' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('admin.users.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.users.*') ? 'bg-blue-700' : '' }}">
                        Users
                    </a>
                    <a href="{{ route('admin.services.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.services.*') ? 'bg-blue-700' : '' }}">
                        Services
                    </a>
                    <a href="{{ route('admin.service-requests.index') }}" 
                       class="px-3 py-2 rounded-lg hover:bg-blue-700 transition {{ request()->routeIs('admin.service-requests.*') ? 'bg-blue-700' : '' }}">
                        Service Requests
                    </a>
                    
                    <!-- Quick Actions Dropdown -->
                    <div class="relative group">
                        <button class="px-3 py-2 rounded-lg hover:bg-blue-700 transition flex items-center">
                            Quick Actions
                            <i class="fas fa-chevron-down ml-1 text-sm"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 hidden group-hover:block z-10">
                            <a href="{{ route('admin.users.create') }}" 
                               class="block px-4 py-2 text-gray-800 hover:bg-blue-100 transition">
                                <i class="fas fa-user-plus mr-2 text-green-500"></i>
                                Add New User
                            </a>
                            <a href="{{ route('admin.services.create') }}" 
                               class="block px-4 py-2 text-gray-800 hover:bg-blue-100 transition">
                                <i class="fas fa-plus-circle mr-2 text-blue-500"></i>
                                Add New Service
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <div class="flex items-center space-x-4">
                <span class="text-blue-100">Welcome, {{ auth()->user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="bg-blue-700 hover:bg-blue-800 px-4 py-2 rounded-lg transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>