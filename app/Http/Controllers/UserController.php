<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|confirmed',
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role' => 'user',
    //     ]);

    //     return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|confirmed',
    //     ]);

    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'role' => 'user',
    //     ]);

    //     return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    // }




    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // public function update(Request $request, User $user)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
    //     ]);

    //     $user->update($request->only(['name', 'email']));

    //     return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    // }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }

    // User Panel Methods
    public function dashboard()
    {
        $user = auth()->user();
        $serviceRequests = ServiceRequest::where('user_id', $user->id)
            ->with('service')
            ->latest()
            ->paginate(5);
            
        return view('user.dashboard', compact('serviceRequests'));
    }

    public function services()
    {
        $services = Service::where('is_active', true)->get();
        return view('user.services', compact('services'));
    }

    public function requestService(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'notes' => 'nullable|string|max:500'
        ]);

        ServiceRequest::create([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id,
            'notes' => $request->notes,
            'status' => 'pending'
        ]);

        return redirect()->route('user.dashboard')->with('success', 'Service request submitted successfully.');
    }

    

     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:admin,user'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // Update the update method to handle role as well
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'role' => 'required|in:admin,user'
        ]);

        $user->update($request->only(['name', 'email', 'role']));

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }
}