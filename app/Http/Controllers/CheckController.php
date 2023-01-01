<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\checkIn;
use App\Models\book;
use Illuminate\Support\Facades\DB;

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


    public function ArrivalsList(Request $request){
        #code here 
        $request->validate([
            'arrival_date' => 'required|date|after_or_equal:today',
        ]);

        if ($request->get('arrival_date') !== null) {
            # code...
          $arrivalsList = DB::table('books')->where('Arrival_Date', $request->get('arrival_date'))->paginate(10);
          return view('rooms.list')->with('arrivalsList', $arrivalsList);

        }
    }

    public function arrivalsDestroy(book $arr){
        if($arr !== null){
            $arr->delete();
            session()->flash('success','Check Out has been Done successfully!');
            return redirect()->route('arrivalsList');
        }
    }

    public function arrivalsTable(Request $request){
        $arrivalsList = DB::table('books')->where('Arrival_Date', $request->route('arr'))->paginate(10);
        return view('rooms.list')->with('arrivalsList', $arrivalsList);;
    }

    public function SearchForCheckOut(Request $request){
        //code 

    }
}
