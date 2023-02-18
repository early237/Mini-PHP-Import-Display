<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    use HasFactory;

    // Only allowed when using mass assignment
    protected $fillable = ['name', 'brand', 'year_made'];
}
