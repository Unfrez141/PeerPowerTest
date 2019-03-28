<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoansController extends Controller
{
    function show(Request $request){
        return View('showLoans')
        ->with('text',$request->input('text'));
    }

    function create(Request $request){
        return View('createLoan')
        ->with('text',$request->input('text'));
    }
}
