<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climbing_Event extends Model
{
    use HasFactory;

    protected $table = 'climbing_events';
    protected $fillable = ['title', 'location', 'date', 'description'];

    protected $casts = [
        'date' => 'datetime',
    ];

    // Relationship: An Event has many Users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
