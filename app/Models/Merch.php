<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    protected $fillable = [
        'image',
        'name',
        'price'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
