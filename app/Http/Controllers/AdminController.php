<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;	
use App\User;
use Auth;
use Image;
class AdminController extends Controller
{
    public function dashboard()
    {
        //return view('admin.dash');
        $data_mhs = Mahasiswa::orderBy('id')->get();
        return view('admin.dash', compact('data_mhs'), array('user' => Auth::user()));
    }
}