<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todocontroller extends Controller
{
    
    public function create(){
        return view('users.register');
    }
}
