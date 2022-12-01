<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portofolio;

class DataController extends Controller
{
    public function data(){
        // return view('home')
        $portofolio = Portofolio::all();
        return view('data',compact(['portofolio']));
    }
    public function dashdata(){
        // return view('home')
        $portofolio = Portofolio::all();
        return view('dashboard',compact(['portofolio']));
    }

    public function insert()
    {
        return view('create');
    }

    public function view(request $request)
    {
        Portofolio::create([
            'portofolio_name'=>$request->portofolio_name,
            'category'=>$request->category,
            'point'=>$request->point,
            'organizer'=>$request->organizer,
            'certificate'=>$request->certificate,
            'date'=>$request->date,
        ]);
        return view('review');
    }
}
