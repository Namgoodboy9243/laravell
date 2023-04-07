<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category2 extends Model
{
    use HasFactory;
    //khai báo các trường dữ liệu
    protected $filltable = ['name', 'stats'];
}
