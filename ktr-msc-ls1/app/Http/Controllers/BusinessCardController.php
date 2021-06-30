<?php

namespace App\Http\Controllers;
use App\Models\BusinessCard;
use Auth;

use Illuminate\Http\Request;


class BusinessCardController extends Controller
{
    //
    public function store(Request $request)
    {
        $businesscard = Businesscard::insert([
            'userid'=> Auth::id(),
            'name'=> $request->name,
            'cpname'=> $request->cpname,
            'tel'=> $request->tel,
            'email'=> $request->email
        ]);
        return redirect('dashboard');
    }

    public function index()
    {
        $businesscard = Businesscard::where("userid",Auth::id())->get();
        return view('dashboard',[
            'businesscards'=>$businesscard
        ]);
    }
}
