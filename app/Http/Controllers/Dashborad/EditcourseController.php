<?php

namespace App\Http\Controllers\Dashborad;

use App\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $courseID = $id;

        return view('dashbord.editcourse')->with(compact('courseID'));
    }
    public function detecourse($id)
    {
        $courseID = $id;
        return view('dashbord.editcourseDate')->with(compact('courseID'));
    }
    public function detailcourse($id)
    {
        // dd($id);
        $courseID = $id;
        return view('dashbord.editcourseDetail')->with(compact('courseID'));
    }

    public function imagecourse($id)
    {
        $courseID = $id;
        return view('dashbord.editcourseImage')->with(compact('courseID'));
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
