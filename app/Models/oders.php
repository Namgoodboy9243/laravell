<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oders extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'name', 'email', 'phone', 'address', 'status'];
}
