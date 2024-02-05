<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $totalUsers = User::count();
        $totalUser = User::where('role', '0')->count();
        $totalReservation = Reservation::count();
        $user = Auth::user();
        $acceptedReservations = $user->reservations()->where('status', 'Accepted')->count();
        return view('home',compact('totalUser','totalReservation','acceptedReservations'));
    }
    
}
