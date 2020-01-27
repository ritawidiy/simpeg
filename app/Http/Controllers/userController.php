<?php

namespace App\Http\Controllers;

use App\Model\Biodata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        $data = Biodata::where('nip', Auth::user()->username)->first();

        return view('user.bio_Pegawai', compact('data'));
    }
}
