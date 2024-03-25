<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electricity extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'aadharNumber', 'aadharImage', 'type', 'voltage', 'meter', 'status', 'payment', 'address'];
}
