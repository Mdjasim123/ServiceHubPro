<?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use App\Models\Service;
// use App\Models\ServiceRequest;
// use Illuminate\Http\Request;

// class AdminController extends Controller
// {
//     public function dashboard()
//     {
//         $totalUsers = User::where('role', 'user')->count();
//         $totalServices = Service::count();
//         $totalRequests = ServiceRequest::count();
//         $pendingRequests = ServiceRequest::where('status', 'pending')->count();
        
//         $recentActivities = ServiceRequest::with(['user', 'service'])
//             ->latest()
//             ->take(5)
//             ->get();

//         return view('admin.dashboard', compact(
//             'totalUsers', 
//             'totalServices', 
//             'totalRequests', 
//             'pendingRequests',
//             'recentActivities'
//         ));
//     }
// }






namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalServices = Service::count();
        $totalRequests = ServiceRequest::count();
        $pendingRequests = ServiceRequest::where('status', 'pending')->count();
        
        $recentActivities = ServiceRequest::with(['user', 'service'])
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'totalUsers', 
            'totalServices', 
            'totalRequests', 
            'pendingRequests',
            'recentActivities'
        ));
    }

    // Add method to manage service requests
    public function serviceRequests()
    {
        $requests = ServiceRequest::with(['user', 'service'])
            ->latest()
            ->paginate(10);
            
        return view('admin.service-requests.index', compact('requests'));
    }

    // Method to update request status
    public function updateRequestStatus(Request $request, ServiceRequest $serviceRequest)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'admin_notes' => 'nullable|string|max:500'
        ]);

        $serviceRequest->update([
            'status' => $request->status,
            'admin_notes' => $request->admin_notes
        ]);

        return redirect()->route('admin.service-requests.index')
            ->with('success', 'Service request status updated successfully.');
    }
}