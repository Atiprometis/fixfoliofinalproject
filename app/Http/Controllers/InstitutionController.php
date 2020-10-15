<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$dataInstitution = DB::table('course_detail')
            //->select('id','course_name','course_type','course_date','course_hours','course_school_name','course_price','course_learn_start','course_learn_end');
//
//        $dataDistinct = DB::select('SELECT DISTINCT `course_school_name` FROM course_detail');

        $dataCount = DB::select('SELECT COUNT(`id`) AS "count" ,`course_school_name` FROM course_detail GROUP BY `course_school_name`');


        //dd($dataCount);


        return view('institution.Institution', compact('dataCount'));


    }


    public function institution(){
        return view('institution/institution');

    }
    public function profileinstitution(){
        return view('institution/profileinstitution');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
