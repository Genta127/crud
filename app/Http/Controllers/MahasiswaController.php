<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', compact(['mahasiswa']));
    }
    public function create(){
        return view('mahasiswa.create');
    }

    public function done(Request $request){
        // dd($request->except(['_token', 'tambah']));
        mahasiswa::create($request->except(['_token', 'tambah']));
        return redirect('/mahasiswa');
    }
}
