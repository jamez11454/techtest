<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = Customer::paginate(18);

        return $customers;

    	// return view('customers.index', ['customers' => $customers]);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        // return $customer;

        return view('customers.show', ['customer' => $customer]);
    }

}
