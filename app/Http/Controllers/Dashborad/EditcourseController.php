<?php

namespace App\Http\Controllers\Dashborad;

use App\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;

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

         $courseAll = Course::where('course_id', '=', $courseID)
         ->get();


        return view('dashbord.editcourse')->with(compact('courseID','courseAll'));
    }
    public function changeAboutCourse(Request $request)
    {
         $courseID = $request->input('courseID');
         $course_category = $request->input('course_category');
         $course_name = $request->input('course_name');
         $course_cost = $request->input('course_cost');
         $course_certificate = $request->input('course_certificate');
         $course_detail = $request->input('course_detail');

         $courseAll = Course::where('course_id', '=', $courseID)
         ->update([
             'course_name' => $course_name,
             'course_category'=> $course_category,
             'course_cost'=> $course_cost,
             'course_certificate' => $course_certificate,
             'course_detail' => $course_detail,
         ]);
        //  ->get();


         return back()->withInput();
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
