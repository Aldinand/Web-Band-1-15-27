<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
