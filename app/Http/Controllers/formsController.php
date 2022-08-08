<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\checkWordsCount;

class formsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd( $request->all());
        // dd( $request->except('_token'));
        // dd( $request->only('name'));
        // $name = $request->input('name');
        $name = $request->name;
        $age = $request->age;
        return "welcome $name , your age is $age";

    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        return view('forms.form2_data', compact('name', 'email', 'age'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Request $request)
    {
        $request->validate([
            // 'name' => 'required | min:3',
            'name' =>[ 'required' ,'min:3' , 'max:20'],
            'email' => 'required| email',
            'password' => 'required |confirmed',
            // 'confirm_password' => 'required',
            'bio' => ['required' , new checkWordsCount(10)],
        ]);

        // if(empty($request->name)){
        //     return 'error';
        // };
        // dd($request->all());
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        $request -> validate ([
            'name' =>[ 'required' ,'min:3' , 'max:20'],
            'cv'=> 'required |file |mimes:pdf'
        ]);

        $file_name = rand().time().$request ->file('cv')->getClientOriginalName();
        $request ->file('cv')->move(public_path('uploads') ,$file_name);
        // dd($request->all());

    }
}
