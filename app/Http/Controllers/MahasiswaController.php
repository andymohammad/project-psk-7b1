<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\User;
use Auth;
use Image;

class MahasiswaController extends Controller
{
    public function datamhs()
    {
        $data_mhs = Mahasiswa::orderBy('id')->get();

        return view('admin.datamahasiswa', compact('data_mhs'), array('user' => Auth::user()));
        
    }

    public function create(Request $request)
    {

        //insert ke user
        $user = new \App\User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama_mhs;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert tabel mahasiswa
        //$request->request->add(['nim' => $user->nim]);
        $mahasiswa = \App\Mahasiswa::create($request->all());
        return redirect('/datamhs');
        
    }

    //public function detail($id){
     //   $d = \App\Mahasiswa::find($id);
     //   return view('mahasiswa.detailmhs', ['d' => $d]);
    //}

    public function edit($id)
    {
        $d = \App\Mahasiswa::find($id);
        return view('admin/edit',['d' => $d]);
        
    }

    public function update(Request $request, $id)
    {
        $d = \App\Mahasiswa::find($id);
        $d -> update($request->all());
        return redirect('/datamhs');
    }

    public function delete($id)
    {
        $d = \App\Mahasiswa::find($id);
        $d -> delete($d);
        return redirect('/datamhs');
    }
    public function profil()
    {
        return view('profil');
    }
}
