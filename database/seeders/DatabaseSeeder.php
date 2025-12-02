<?php

// namespace Database\Seeders;

// use App\Models\User;
// use App\Models\Service;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\Hash;

// class DatabaseSeeder extends Seeder
// {
//     public function run()
//     {
//         // Create Admin User
//         User::create([
//             'name' => 'Admin User',
//             'email' => 'admin@admin.com',
//             'password' => Hash::make('password'),
//             'role' => 'admin',
//         ]);

//         // Create Regular User
//         User::create([
//             'name' => 'Regular User',
//             'email' => 'user@user.com',
//             'password' => Hash::make('password'),
//             'role' => 'user',
//         ]);

//         // Create Sample Services
//         Service::create([
//             'title' => 'Web Development',
//             'description' => 'Complete web development services including frontend and backend development.',
//             'price' => 999.99,
//         ]);

//         Service::create([
//             'title' => 'Mobile App Development',
//             'description' => 'Cross-platform mobile application development for iOS and Android.',
//             'price' => 1499.99,
//         ]);

//         Service::create([
//             'title' => 'SEO Optimization',
//             'description' => 'Search engine optimization services to improve your website ranking.',
//             'price' => 499.99,
//         ]);

//         Service::create([
//             'title' => 'Graphic Design',
//             'description' => 'Professional graphic design services for logos, banners, and marketing materials.',
//             'price' => 299.99,
//         ]);
//     }
// }





namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use App\Models\ServiceRequest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create Regular User
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Create Sample Services
        $webService = Service::create([
            'title' => 'Web Development',
            'description' => 'Complete web development services including frontend and backend development.',
            'price' => 999.99,
        ]);

        $mobileService = Service::create([
            'title' => 'Mobile App Development',
            'description' => 'Cross-platform mobile application development for iOS and Android.',
            'price' => 1499.99,
        ]);

        $seoService = Service::create([
            'title' => 'SEO Optimization',
            'description' => 'Search engine optimization services to improve your website ranking.',
            'price' => 499.99,
        ]);

        // Create sample service requests
        ServiceRequest::create([
            'user_id' => $user->id,
            'service_id' => $webService->id,
            'status' => 'pending',
            'notes' => 'I need this for my e-commerce website.'
        ]);

        ServiceRequest::create([
            'user_id' => $user->id,
            'service_id' => $mobileService->id,
            'status' => 'approved',
            'notes' => 'Please develop for both iOS and Android.',
            'admin_notes' => 'Project approved. Development will start next week.'
        ]);

        ServiceRequest::create([
            'user_id' => $user->id,
            'service_id' => $seoService->id,
            'status' => 'rejected',
            'notes' => 'Need SEO for my blog website.',
            'admin_notes' => 'We currently do not offer SEO services for blog websites.'
        ]);
    }
}