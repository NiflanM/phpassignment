<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationAccepted;

use App\Models\Reservation;
use Auth;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//     public function index()
// {
    
//     if (Auth::user()->role == '1') {
//         // Admin can see all reservations
//         $reservations = Reservation::paginate(10);
//     } else {
//         // Regular user can only see their own reservations
//         $reservations = Auth::user()->reservations()->paginate(10);
//     }

    
//     return view('reservations.index')->with('reservations', $reservations);
// }
public function index(Request $request)
{
    // Fetch all reservations by default
    $reservationsQuery = Auth::user()->role == 1 || Auth::user()->role == 2  ? Reservation::query() : Auth::user()->reservations();

    // Fetch reservations based on status filter
    $statusFilter = $request->input('status_filter');

    if ($statusFilter) {
        $reservationsQuery->where('status', $statusFilter);
    }

    $reservations = $reservationsQuery->paginate(10);

    return view('reservations.index')->with('reservations', $reservations);
}

    public function create()
    {
        return view('reservations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            'guests' => 'required|integer',
        ]);
        $request->merge(['status' => 'pending']);
        $reservation = Auth::user()->reservations()->create($request->all());

    
        // Redirect to the checkout page with the reservation ID
        return redirect()->route('checkout', ['reservation' => $reservation->id]);
    }

    public function show($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.show')->with('reservation', $reservation);
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.edit')->with('reservation', $reservation);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'reservation_date' => 'required',
            'reservation_time' => 'required',
            'guests' => 'required',
            
        ]);

        $reservation = Reservation::find($id);
        $reservation->update($request->all());

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully.');
    }
    public function checkout(Reservation $reservation)
    {
       
      //Reservation Fee
        $pricePerGuest = 25; 
        $totalPrice = $reservation->guests * $pricePerGuest;

        // Pass reservation details and price to the checkout view
        return view('checkout', compact('reservation', 'totalPrice'));
    }
    public function acceptReservation($id)
    {
        $reservation = Reservation::find($id);
        
        if ($reservation) {
            $reservation->status = 'Accepted';
            $reservation->save();
    
            // Send email notification
            Mail::to($reservation->email)->send(new ReservationAccepted($reservation));
        }
    
        return redirect()->route('reservations.index')->with('success', 'Reservation accepted successfully.');
    }

public function declineReservation($id)
{
    $reservation = Reservation::find($id);
    
    if ($reservation) {
        $reservation->status = 'Declined';
        $reservation->save();
    }

    return redirect()->route('reservations.index')->with('success', 'Reservation declined successfully.');
}
    
}


 // You can use the $reservation variable to access reservation details
        // For example, $reservation->customer_name, $reservation->email, etc.

