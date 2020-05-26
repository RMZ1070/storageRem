<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $admin = Admin::all();
       
        return view('welcome', compact('admin'));

    }
}
