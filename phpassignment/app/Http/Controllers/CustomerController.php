<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;
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
       $customer = Customer::all();
       return view ('customer.index')->with('customer',$customer);
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
        customer::create($input);
            return redirect('customer')->with('flash_message','Customer Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.show')->with('customer',$customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.edit')->with('customer',$customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
       $input = $request->all();
       $customer->update($input);
       return redirect('customer')->with('flash_message','Customer Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Customer::destroy($id);
       return redirect('customer')->with('flash_message','Customer Deleted!');
    }
}
