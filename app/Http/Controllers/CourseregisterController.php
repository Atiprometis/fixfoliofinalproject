<?php

namespace App\Http\Controllers;

use App\Courseregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseregisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("course/course-register");
    }

    public function registercourse()
    {
        return view('course/course-register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            $print = $request->validate([

            'name'=>'required',
            'lastname'=>'required',
            'telphone'=>'required',
            'email'=>'required',
            'idcard'=>'required',
            'birthday'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'career'=>'required',
            'school'=>'required',
            'branch'=>'required',
            'qualification'=>'required',
            'result'=>'required',
            'dadname'=>'required',
            'momname'=>'required',
            'housenumber'=>'required',
            'swine'=>'required',
            'alley'=>'required',
            'road'=>'required',
            'district'=>'required',
            'county'=>'required',
            'province'=>'required',
            'postalcode'=>'required',
            'housenumber-present'=>'required',
            'swine-present'=>'required',
            'alley-present'=>'required',
            'road-present'=>'required',
            'district-present'=>'required',
            'county-present'=>'required',
            'province-present'=>'required',
            'postalcode-present'=>'required',


        ]);

        return view('print/print', compact('print'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function show(Courseregister $courseregister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function edit(Courseregister $courseregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courseregister $courseregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courseregister $courseregister)
    {
        //
    }
}
