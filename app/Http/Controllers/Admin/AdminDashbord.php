<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashbord extends Controller
{
    public function index(){
        return view("Admin.dashbord");
    }
} 
