<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class formController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:30',
            'email' => 'required|email:rfc',
            'tanggalLahir' => 'required|date|before:today',
            'skor' => 'required|numeric|between:2.00,99.99',
            'foto' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->foto->storeAs('public/images', $request->foto->getClientOriginalName());

        form::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggalLahir' => $request->tanggalLahir,
            'skor' => $request->skor,
            'foto' => $request->foto->getClientOriginalName(),
        ]);
        return redirect('/result')->with(['status' => 'success']);
    }

    public function result() {
        $col = collect(form::all());        
        return view('result',$col->last());
    }
    public function showAll(){
        $data = form::all();
        return view('showall',compact('data'));
    }
}