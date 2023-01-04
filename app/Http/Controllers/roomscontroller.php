<?php

namespace App\Http\Controllers;
use App\Models\checkIn;
use App\Models\invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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

        $rooms = checkIn::paginate(10);
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
                'arrival_date' => 'required|date|after_or_equal:today',
                'daparture_date' => 'required|date|after_or_equal:today',
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
            session()->flash('success', 'Book has been created successfully!');
            return redirect()->route('rooms');
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
        session()->flash('success', 'Book has been created successfully!');
        return view('rooms.show')->with('room', $room);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(checkIn $room)
    {
        //delete specific row
        DB::table('invoices')->where('invoice_fk', $room->checkIn_id)->delete();
        $room->delete();
        session()->flash('success','Check Out has been Done successfully!');
        return redirect()->to('rooms');
    }



    public function store_invoice(Request $request, checkIn $room ){
        $id = $request->route('checkIn');

         if ($id === null) {
             return response()->json([
                'error' => 'checkIn_id is required'
            ], 400);
         } else {
                // Validate the request data
                $request->validate([
                    'price' => 'required',
                    'details' => 'required|string'
                ]);

                $invoice = new invoice;
                $invoice->invoice_fk = $id;
                $invoice->price = $request->get('price');
                $invoice->details = $request->get('details');
                $invoice->save();
                session()->flash('success', 'Invoice has been created successfully!');
                return redirect()->to('invoices');
               

         }
       

  }

 
    public function invoices_index(){
        $rooms = checkIn::with('invoices')->paginate(10);
        return view('invoices.table', [
            'rooms'=> $rooms,
             
        ]);
    }

    public function show_invoice(invoice $invoice){
        //code here 
        if ($invoice !== null) {
            # code...
            $invoiceNumber = mt_rand(1, 10000) + 2;
            $invoices = invoice::with('room')->where('invoice_fk', $invoice->invoice_fk)->get();
            $invoice = Invoice::find($invoice);
            return view('invoices.show', compact('invoices'))->with('invoiceNumber', $invoiceNumber);

        }

       }

       public function PayNow(invoice $invoice)
       {
            //code here
          if ($invoice !== null) {
            # code...
            $invoiceNumber = mt_rand(1, 10000) + 2;
            $invoice->delete();
            $invoices = invoice::with('room')->where('invoice_fk', $invoice->invoice_fk)->get();
            session()->flash('success', 'Payment has been Done successfully!');
            return view('invoices.show', compact('invoices'))->with('invoiceNumber', $invoiceNumber);
           
          }
            
       }

    }  


