<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['firstName', 'lastName', 'email', 'profession', 'chapterName', 'companyName', 'website', 'address', 'postcode', 'phoneNumber', 'status', 'joinDate', 'renewalDate', 'sponsor'];
}
