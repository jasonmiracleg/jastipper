<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JastiperProductController extends Controller
{
    public function home_customer(){
        return view('Customer.index');
    }
}
