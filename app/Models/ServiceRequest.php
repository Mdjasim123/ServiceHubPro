<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class ServiceRequest extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'user_id',
//         'service_id',
//         'status',
//         'notes'
//     ];

//     public function user()
//     {
//         return $this->belongsTo(User::class);
//     }

//     public function service()
//     {
//         return $this->belongsTo(Service::class);
//     }
// }



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'status',
        'notes',
        'admin_notes' // Add this new field
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Helper methods for status
    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isApproved()
    {
        return $this->status === 'approved';
    }

    public function isRejected()
    {
        return $this->status === 'rejected';
    }
}