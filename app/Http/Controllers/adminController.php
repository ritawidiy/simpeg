<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function adminn()
    {
        return view('admin_page');
    }
}
