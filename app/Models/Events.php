<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'name',
        'date',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }
}
