<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::paginate(5);
       return view ('customer.index')->with('customer',$user);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $input = $request->all();
         user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
         ]);
            return redirect('customer')->with('flash_message','Customer Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('customer.show')->with('customer',$user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('customer.edit')->with('customer',$user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
       $input = $request->all();
      $user->update($input);
       return redirect('customer')->with('flash_message','Customer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
       return redirect('customer')->with('flash_message','Customer Deleted!');
    }
}
