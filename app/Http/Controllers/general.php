<?php

namespace App\Http\Controllers;
use App\application;
use App\programs;
use Illuminate\Http\Request;

class general extends Controller
{
    //
    public function sendList(Request $request){
        $choices = programs::all();
        return response()->json([
            'choices'=>$choices,
            'code'=>'1'
        ]);

    }

    public function register(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required',
            'middle_name' =>'nullable',
            'last_name' =>'nullable',
            'college_name' =>'required',
            'mobile' =>'required',
            'dept' =>'required',
            'year' =>'required',
            'choice' =>'required',

        ]);
        $count= application::where('email',$request->input('email'))->count();
        $count = $count+ (application::where('mobile',$request->input('mobile'))->count());
        if($count>0){
            return response()->json([
                'code'=>2,
                'message'=>'user already registered'
            ]);
        }
        $app = new application([
            'first_name'=>($request->input(  'first_name')),
        'middle_name'=>($request->input( 'middle_name')),
        'last_name'=>($request->input(   'last_name')),
        'college_name'=>($request->input('college_name')),
        'dept'=>($request->input(        'dept')),
        'email'=>($request->input(       'email')),
        'year'=>($request->input(        'year')),
        'choice'=>($request->input(      'choice')),
        'mobile'=>($request->input(       'mobile')),
        ]);
        $app->save();
        return response()->json([
            'code'=>1,
            'message'=>'user registered successfully'
        ]);



    }
}
