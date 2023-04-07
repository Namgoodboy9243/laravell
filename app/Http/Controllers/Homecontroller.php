<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class Homecontroller extends Controller
{
    public function index(){
       $category =  category::paginate();
       return view('index', compact('category'));
    }
}
