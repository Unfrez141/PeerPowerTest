<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegistration extends Controller
{
    //
    function postRegister(Request $request) {
        //Retrieve the name input field
        return View('show')
        ->with('name', $request->name)
        ->with('username', $request->username)
        ->with('password', $request->password);
}

}
