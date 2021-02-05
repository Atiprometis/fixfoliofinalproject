<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintController extends Controller
{

    public function print(Request $request){
        $courseID = $request->input('courseID');


        return view('print/print');
    }
    public function index(){
        return view('print.print');

    }

    public function store(Request $request)
    {



    }

}
