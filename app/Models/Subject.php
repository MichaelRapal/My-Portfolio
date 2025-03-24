<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import User model

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'name',
        'code',
        'instructor',
        'day',
        'time'
    ];

    // Relationship with the sender (User model)
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // Relationship with the receiver (User model)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
