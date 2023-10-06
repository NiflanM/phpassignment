<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use DB;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('reservation');
    }
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->customer_id = auth()->id();;
        $reservation->subject =$request->subject;
        $reservation->message = $request->message;
        
        $reservation->save();
        return redirect('reservation')->with('flash_message','Thank you for the reservation!');
     
    }
    public function showreservation(){

       
        $reservation = reservation::find();
        return view('reservation.show')->with('reservation',$reservation);
    }
    
}
