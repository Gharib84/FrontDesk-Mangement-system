<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\checkIn;

class CheckController extends Controller
{
    //


    public function index(){
        return view('rooms.arrivals');
    }

    public function SearchForCheckIn(Request $request){
        //code
            return View('rooms.index');

    }


    public function SearchForCheckOut(Request $request){
        //code 

    }
}
