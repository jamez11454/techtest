<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CustomersImport;
use Maatwebsite\Excel\Facades\Excel;


class ImportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function importView()
    {
       return view('customers/import');
    }
    public function import()
    {
        Excel::import(new CustomersImport, request()->file('file'));

        return back();
    }
}
