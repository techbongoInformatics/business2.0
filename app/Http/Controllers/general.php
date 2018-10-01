<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class general extends Controller
{
    //
    public function register(Request $request){
        $this->validate($request, [
            'user_name' => 'required',
            'role' => 'required',
            'restro_id' =>'required',
            'address' =>'required',
            'pin' =>'required',
            'phone' =>'required',

        ]);
    }
}
