<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Velden die mass-assignment toestaan
    protected $fillable = ['firstname', 'lastname'];
}
