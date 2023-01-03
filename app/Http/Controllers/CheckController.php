<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\checkIn;
use App\Models\book;
use Illuminate\Support\Facades\DB;

class CheckController extends Controller
{
    //


    public function Create(){
        return view('rooms.arrivals');
    }

    public function SearchForCheckIn(Request $request){
        //code
            return View('rooms.index');

    }


    public function ArrivalsPost(Request $request){
        #code here 
        $request->validate([
            'arrival_date' => 'required|date|after_or_equal:today',
        ]);

        if ($request->get('arrival_date') !== null) {
            # code...
          Session()->put('search_date', $request->get('arrival_date'));
          $arrivalsList = DB::table('books')->where('Arrival_Date', $request->get('arrival_date'))->paginate(10);
          return view('rooms.list')->with('arrivalsList', $arrivalsList);

        }
    }

    public function ArrivalDeleteRoom(book $arr){
        if($arr !== null){
            $arr->delete();
            session()->flash('success','Room has been Deleted successfully!');
            return redirect()->route('arrivals.index')->withInput();
        }
    }

    public function ArrivalsIndex(book $arr, Request $request)
    {
        $search_date = session()->get('search_date');
        $arrivalsList = DB::table('books')->where('Arrival_Date',$search_date )->paginate(10);
        return view('rooms.list')->with('arrivalsList', $arrivalsList);

    }



    public function DepartureForm(){
        return view('rooms.departureForm');

    }

    public function DeparturePost(Request $request)
    {
        $request->validate([
            'departure_date' => 'required|date|after_or_equal:today',
        ]);

        if ($request->get('departure_date') !== null) {
            Session()->put('departure_date', $request->get('departure_date'));
            $departureList = DB::table('check_ins')->where('Departure_Date', $request->get('departure_date'))->paginate(10);
            return view('rooms.departureList')->with('departureList', $departureList);
        }
    }

    public function DeleteRoomPerDate(checkIn $dep)
    {
        if ($dep !== null) {
            
            $dep->delete();
            session()->flash('success','Check Out has been Done successfully!');
            return redirect()->route('departure.list')->withInput();

            

        }
    }

    public function DepartureListAfterCheckOut(Request $request, checkIn $dep)
        {
            $departure_Date = session()->get('departure_date');
                if (! is_null($departure_Date)) {
                        $departureList = DB::table('check_ins')->where('Departure_Date', $departure_Date)->paginate(10);
                        return view('rooms.departureList')->with('departureList', $departureList);
                }
            
        }
}
