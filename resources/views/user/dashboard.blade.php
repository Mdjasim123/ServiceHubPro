{{-- @extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">User Dashboard</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">My Service Requests</h3>
                    </div>
                    <div class="border-t border-gray-200">
                        <div class="overflow-x-auto">
                          <!-- Update the table in user dashboard -->
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Requested Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Admin Notes</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($serviceRequests as $request)
                                    <tr>
                                        <td class="px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $request->service->title }}</div>
                                            <div class="text-sm text-gray-500">${{ number_format($request->service->price, 2) }}</div>
                                            @if($request->notes)
                                            <div class="text-sm text-blue-600 mt-1">
                                                <strong>Your Notes:</strong> {{ $request->notes }}
                                            </div>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                @if($request->status == 'pending') bg-yellow-100 text-yellow-800
                                                @elseif($request->status == 'approved') bg-green-100 text-green-800
                                                @else bg-red-100 text-red-800 @endif">
                                                {{ ucfirst($request->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $request->created_at->format('M d, Y') }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-900">
                                                @if($request->admin_notes)
                                                    {{ $request->admin_notes }}
                                                @else
                                                    <span class="text-gray-400">No notes yet</span>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                            No service requests yet. <a href="{{ route('user.services') }}" class="text-blue-600 hover:text-blue-900">Browse services</a>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 sm:px-6">
                            {{ $serviceRequests->links() }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Quick Actions</h3>
                        <div class="mt-4 space-y-3">
                            <!-- Update the Browse Services link -->
                            <a href="{{ route('user.services') }}" 
                            class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition block text-center">
                                Browse Services
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Statistics</h3>
                        <div class="mt-4 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-500">Total Requests:</span>
                                <span class="text-sm font-medium">{{ $serviceRequests->total() }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-500">Pending:</span>
                                <span class="text-sm font-medium text-yellow-600">
                                    {{ $serviceRequests->where('status', 'pending')->count() }}
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-gray-500">Approved:</span>
                                <span class="text-sm font-medium text-green-600">
                                    {{ $serviceRequests->where('status', 'approved')->count() }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="py-8 bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Page Title -->
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 bg-blue-600 text-white flex items-center justify-center rounded-xl shadow-md">
                <i class="fas fa-chart-line"></i>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">User Dashboard</h1>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- MAIN CONTENT -->
            <div class="lg:col-span-2">
                <div class="bg-white shadow-lg rounded-2xl border border-gray-100 overflow-hidden">

                    <!-- Header -->
                    <div class="px-6 py-4 border-b bg-gray-50/70">
                        <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-2">
                            <i class="fas fa-list text-blue-600"></i> My Service Requests
                        </h3>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-100 sticky top-0">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Service</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Requested</th>
                                    <th class="px-6 py-3 text-left text-xs font-bold text-gray-600 uppercase">Admin Notes</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($serviceRequests as $request)
                                <tr class="hover:bg-blue-50/40 transition">
                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-900">{{ $request->service->title }}</div>
                                        <div class="text-sm text-gray-500">${{ number_format($request->service->price, 2) }}</div>

                                        @if($request->notes)
                                            <div class="text-sm text-blue-600 mt-1">
                                                <strong>Your Notes:</strong> {{ $request->notes }}
                                            </div>
                                        @endif
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-3 py-1 text-xs font-semibold rounded-full
                                            @if($request->status == 'pending') bg-yellow-100 text-yellow-700
                                            @elseif($request->status == 'approved') bg-green-100 text-green-700
                                            @else bg-red-100 text-red-700 @endif">
                                            {{ ucfirst($request->status) }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                        {{ $request->created_at->format('M d, Y') }}
                                    </td>

                                    <td class="px-6 py-4 text-gray-700">
                                        @if($request->admin_notes)
                                            {{ $request->admin_notes }}
                                        @else
                                            <span class="text-gray-400">No notes yet</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-6 text-center text-gray-500">
                                        No service requests yet.
                                        <a href="{{ route('user.services') }}" class="text-blue-600 font-semibold hover:underline">
                                            Browse services
                                        </a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-4 py-3 bg-gray-50 border-t">
                        {{ $serviceRequests->links() }}
                    </div>
                </div>
            </div>

            <!-- SIDEBAR -->
            <div class="space-y-6">

                <!-- Quick Actions -->
                <div class="bg-white shadow-lg rounded-2xl border border-gray-100 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-bolt text-blue-600"></i> Quick Actions
                    </h3>

                    <div class="mt-4">
                        <a href="{{ route('user.services') }}"
                            class="w-full bg-blue-600 text-white px-5 py-3 rounded-xl shadow hover:bg-blue-700 transition block text-center font-medium">
                            Browse Services
                        </a>
                    </div>
                </div>

                <!-- Statistics -->
                <div class="bg-white shadow-lg rounded-2xl border border-gray-100 p-6">
                    <h3 class="text-lg font-semibold text-gray-800 flex items-center gap-2">
                        <i class="fas fa-chart-pie text-blue-600"></i> Statistics
                    </h3>

                    <div class="mt-4 space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Total Requests:</span>
                            <span class="font-semibold">{{ $serviceRequests->total() }}</span>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Pending:</span>
                            <span class="font-semibold text-yellow-600">
                                {{ $serviceRequests->where('status', 'pending')->count() }}
                            </span>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Approved:</span>
                            <span class="font-semibold text-green-600">
                                {{ $serviceRequests->where('status', 'approved')->count() }}
                            </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
