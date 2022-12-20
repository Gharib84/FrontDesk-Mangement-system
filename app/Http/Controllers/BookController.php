<?php

namespace App\Http\Controllers;
use App\Models\checkIn;
use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $books = book::paginate(3);
        return view('books.index', [
            "books" => $books
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('books.create');
        
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
                'daparture_date' => 'required'
            ]
            );

            //insert to database
        
        $book = new book();
        $book->room_number = $request->get('room_number');
        $book->Guest_Name = $request->get('guest_name');
        $book->Room_Type = $request->get('room_type');
        $book->Arrival_Date = $request->get('arrival_date');
        $book->Departure_Date = $request->get('daparture_date');
        $book->save();

        
         flash('Reservation Has Created')->success();
         return redirect()->route('books.index');
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //show book

        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book $book, checkIn $checkIn)
    {
        //
        $request->validate(
            [
                'room_number' => 'required',
                'guest_name' => 'required|string|min:10|max:50',
                'room_type' => 'required',
                'arrival_date' => 'required',
                'daparture_date' => 'required',
                'pax' => 'required'
            ]
            );

            $checkIn = new checkIn();
            $checkIn->room_number = $request->get('room_number');
            $checkIn->Guest_Name = $request->get('guest_name');
            $checkIn->Room_Type = $request->get('room_type');
            $checkIn->Arrival_Date = $request->get('arrival_date');
            $checkIn->Departure_Date = $request->get('daparture_date');
            $checkIn->pax = $request->get('pax');
            $checkIn->save();

            //delete row in room list 
            DB::table('books')->where('room_number', '=', $request->get('room_number'))->delete();
            return redirect()->route('rooms.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}
