{{-- @extends('layouts.app')

@section('title', 'Available Services')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 mb-6">Available Services</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $service)
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                    <div class="flex justify-between items-center">
                        <span class="text-2xl font-bold text-blue-600">${{ number_format($service->price, 2) }}</span>
                        <button onclick="openRequestModal({{ $service->id }}, '{{ $service->title }}')"
                                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                            Request Service
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if($services->isEmpty())
        <div class="bg-white shadow rounded-lg p-6 text-center">
            <p class="text-gray-500">No services available at the moment.</p>
        </div>
        @endif
    </div>
</div>

<!-- Request Service Modal -->
<div id="requestModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
        <div class="mt-3">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Request Service</h3>
                <!-- The form action should use the correct route -->
               <form id="requestForm" method="POST" action="{{ route('user.service.request') }}">
                @csrf
                <input type="hidden" name="service_id" id="service_id">
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Service:</label>
                    <p id="serviceTitle" class="text-gray-900 font-semibold"></p>
                </div>
                <div class="mb-4">
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">Additional Notes (Optional):</label>
                    <textarea name="notes" id="notes" rows="3" 
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Any special requirements..."></textarea>
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <button type="button" onclick="closeRequestModal()"
                            class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                        Submit Request
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openRequestModal(serviceId, serviceTitle) {
    document.getElementById('service_id').value = serviceId;
    document.getElementById('serviceTitle').textContent = serviceTitle;
    document.getElementById('requestModal').classList.remove('hidden');
}

function closeRequestModal() {
    document.getElementById('requestModal').classList.add('hidden');
    document.getElementById('requestForm').reset();
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('requestModal');
    if (event.target === modal) {
        closeRequestModal();
    }
}
</script>
@endsection --}}



@extends('layouts.app')

@section('title', 'Available Services')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Premium Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-full mb-6 shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                <span class="text-sm font-semibold">Premium Services</span>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Professional
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Services</span>
            </h1>
            
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Choose from our curated selection of premium services
            </p>
        </div>

        <!-- Services Grid -->
        @if($services->isNotEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $service)
            <div class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <!-- Card Header -->
                <div class="h-40 bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center p-8">
                    <div class="text-center">
                        <div class="bg-white/20 backdrop-blur-sm p-4 rounded-2xl inline-block">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Card Content -->
                <div class="p-6">
                    <!-- Service Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                        {{ $service->title }}
                    </h3>
                    
                    <!-- Service Description -->
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ $service->description }}
                    </p>
                    
                    <!-- Price & Action -->
                    <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                        <div>
                            <span class="text-3xl font-bold text-gray-900">₹{{ number_format($service->price, 2) }}</span>
                        </div>
                        
                        <button onclick="openRequestModal({{ $service->id }}, '{{ addslashes($service->title) }}')"
                                class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-5 py-2.5 rounded-xl font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                            Request
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-12 text-center">
            <div class="max-w-md mx-auto">
                <div class="bg-gradient-to-br from-blue-100 to-indigo-100 w-24 h-24 rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">No Services Available</h3>
                <p class="text-gray-600">Check back soon for updates.</p>
            </div>
        </div>
        @endif

        <!-- Features Section -->
        <div class="mt-16">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl shadow-2xl overflow-hidden">
                <div class="px-8 py-12">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-white mb-4">Why Choose Us?</h2>
                        <p class="text-blue-100">Premium quality with professional support</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3">Fast Delivery</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3">Quality Guaranteed</h3>
                        </div>
                        
                        <div class="text-center">
                            <div class="bg-white/10 backdrop-blur-sm w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3">24/7 Support</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Premium Modal -->
<div id="requestModal" class="fixed inset-0 z-50 overflow-y-auto hidden">
    <div class="fixed inset-0 bg-gray-900/70 backdrop-blur-sm"></div>
    
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center">
        <div class="inline-block align-bottom bg-white rounded-2xl shadow-2xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 px-6 py-4 rounded-t-2xl">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-white mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="text-xl font-bold text-white">Request Service</h3>
                    </div>
                    <button onclick="closeRequestModal()" 
                            class="text-white hover:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            
            <!-- Modal Form -->
            <div class="px-6 py-8">
                <form id="requestForm" method="POST" action="{{ route('user.service.request') }}" class="space-y-6">
                    @csrf
                    <input type="hidden" name="service_id" id="service_id">
                    
                    <!-- Service Info -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-5 border border-blue-100">
                        <div class="flex items-start">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 p-3 rounded-lg mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 font-medium">Service:</p>
                                <p id="serviceTitle" class="text-xl font-bold text-gray-900 mt-1"></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Notes -->
                    <div>
                        <label for="notes" class="block text-sm font-semibold text-gray-900 mb-3">
                            Additional Notes
                            <span class="text-gray-500 font-normal">(Optional)</span>
                        </label>
                        <textarea name="notes" id="notes" rows="4"
                                  class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent focus:outline-none resize-none"
                                  placeholder="Any special requirements..."></textarea>
                    </div>
                    
                    <!-- Form Footer -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" onclick="closeRequestModal()"
                                class="bg-gray-100 hover:bg-gray-200 text-gray-900 font-semibold px-6 py-3 rounded-xl transition-colors">
                            Cancel
                        </button>
                        <button type="submit" 
                                class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold px-6 py-3 rounded-xl shadow-md hover:shadow-lg transition-all">
                            Submit Request
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function openRequestModal(serviceId, serviceTitle) {
    document.getElementById('service_id').value = serviceId;
    document.getElementById('serviceTitle').textContent = serviceTitle;
    document.getElementById('requestModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeRequestModal() {
    document.getElementById('requestModal').classList.add('hidden');
    document.getElementById('requestForm').reset();
    document.body.style.overflow = 'auto';
}

window.onclick = function(event) {
    const modal = document.getElementById('requestModal');
    if (event.target === modal) {
        closeRequestModal();
    }
}
</script>
@endsection