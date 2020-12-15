<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dataCount = DB::select('SELECT COUNT(`id`) AS "count" ,`course_school` FROM courses GROUP BY `course_school`');

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

        $request->validate([

            'search'=>'required',
        ]);

        //$institutions = DB::table('school')->select('school_name')->where('school_name','LIKE',$request->search);

        //$institutions = Institution::where('school_name','LIKE','%'.$request->search.'%')->with('Institution')->get();

        $institutions = Institution::where('school_name', 'like','%'.$request->search.'%')->get();

        return view('institution.search',compact('institutions'));

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

//    public function search()
//    {
//
//
//        $search_text = $_GET['search'];
//
//        $institutions = Institution::where('school_name','LIKE','%'.$search_text.'%')->with('Institution')->get();
//
//        return view('institution.search',compact('institutions'));
//
//    }

}
