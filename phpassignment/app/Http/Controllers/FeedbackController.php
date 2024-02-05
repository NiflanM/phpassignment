<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Auth;
use DB;
use Illuminate\Http\Request;

class FeedbackController extends Controller
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
        return view('feedback');
      

    }

    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->customer_id = auth()->id();;
        $feedback->subject =$request->subject;
        $feedback->message = $request->message;
        
        $feedback->save();
        return redirect('feedback')->with('flash_message','Thank you for the feedback!');
     
    }
    public function showfeedback()
    {
        
        $feedback = DB::table('feedback as f')
            ->select('users.name as customer_name', 'f.subject', 'f.message', 'f.id') // Include the feedback ID
            ->join('users', 'f.customer_id', '=', 'users.id')
            ->where('users.role', 0)
            ->get();
          
        return view('showfeedback')->with('feedback', $feedback);
        
    }
    public function destroy($id)
{
    Feedback::destroy($id);
    return redirect('showfeedback')->with('flash_message', 'Feedback deleted successfully');
}
}

