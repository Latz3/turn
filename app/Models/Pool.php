<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    use HasFactory;


    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function fencers()
    {
        return $this->belongsToMany(Fencer::class);
    }
}
