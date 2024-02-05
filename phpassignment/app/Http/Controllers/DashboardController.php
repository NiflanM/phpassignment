<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        
        $totalAllUser = User::count();
        $totalUser = User::where('role', '0')->count();
        $totalAdmin = User::where('role', '1')->count();

        $totalReservation = Reservation::count();
        $todayReservation = Reservation::whereDate('created_at', Carbon::today())->count();
        $thisMonthReservation = Reservation::whereMonth('created_at', now())->count();
        $thisYearReservation = Reservation::whereYear('created_at', now())->count();

        return view('dashboard', compact('totalAllUser', 'totalUser', 'totalAdmin', 'totalReservation', 'todayReservation', 'thisMonthReservation', 'thisYearReservation'));
    }
   
}
