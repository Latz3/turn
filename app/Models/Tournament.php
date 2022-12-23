<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['name', 'date', 'size', 'location'];


public function pools()
{
    return $this->hasMany(Pool::class);
}
}
