<?php

namespace App\Http\Controllers;
use App\Models\checkIn;
use Illuminate\Http\Request;

class roomscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $rooms = checkIn::paginate(3);
        flash('Reservation Has Created')->success();

        return view('rooms.index', [
            "rooms"=> $rooms,
            
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        return view('rooms.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'room_number' => 'required|unique:books,room_number',
                'guest_name' => 'required|string|min:10|max:50',
                'room_type' => 'required',
                'arrival_date' => 'required',
                'daparture_date' => 'required',
                'pax'=> 'required'
            ]
            );


            $checkin = new checkIn;
            $checkin->room_number = $request->get('room_number');
            $checkin->Guest_Name = $request->get('guest_name');
            $checkin->Room_Type = $request->get('room_type');
            $checkin->Arrival_Date = $request->get('arrival_date');
            $checkin->Departure_Date = $request->get('daparture_date');
            $checkin->Departure_Date = $request->get('pax');
            $checkin->save();

        
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(checkIn $room)
    {

        // code here

        return view('rooms.show')->with('room', $room);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
