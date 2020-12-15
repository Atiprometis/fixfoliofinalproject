<?php

namespace App\Http\Controllers;

use App\Backoffice;
use Cartalyst\Sentinel\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courseData = Backoffice::all();
        $readSchoolname = DB::select('SELECT courses.id, school.school_name, courses.course_name, courses.course_category FROM school INNER JOIN courses ON courses.course_school = school.course_school');

        return view('backoffice.dashboard', compact('courseData','readSchoolname'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backoffice.create_course');
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
        $id = Auth::id();
        $request->validate([

            'course_name'=>'required',
            'course_category'=>'required',
            'course_certificate'=>'required',
            'course_cost'=>'required',
            'course_detail'=>'required',
            'course_youtube',
            'course_open'=>'required',
            'course_close'=>'required',
            'course_hours'=>'required',
            'course_learn_start'=>'required',
            'course_learn_end'=>'required',
            'course_start'=>'required',
            'course_end'=>'required',
            'course_online'=>'required',
            'image_course',

        ]);



        DB::table('courses')
            ->insert([

                'course_school'=>$id,
                'course_name'=>$request->course_name,
                'course_category'=>$request->course_category,
                'course_certificate'=>$request->course_certificate,
                'course_cost'=>$request->course_cost,
                'course_detail'=>$request->course_detail,
                'course_youtube'=>$request->course_youtube,
                'course_open'=>$request->course_open,
                'course_close'=>$request->course_close,
                'course_hours'=>$request->course_hours,
                'course_learn_start'=>$request->course_learn_start,
                'course_learn_end'=>$request->course_learn_end,
                'course_start'=>$request->course_start,
                'course_end'=>$request->course_end,
                'course_online'=>$request->course_online,
                'image_course'=>$request->image_course,

            ]);

        return redirect('/createCourseDetail');

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
        $courseData = Backoffice::find($id);

        return view('backoffice.edit_course', compact(['courseData']));
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
        $request -> validate([

            'course_name'=>'required',
            'course_category',
            'course_certificate'=>'required',
            'course_cost',
            'course_detail'=>'required',
            'course_youtube',
            'course_open'=>'required',
            'course_close'=>'required',
            'course_hours'=>'required',
            'course_start'=>'required',
            'course_end'=>'required',
            'course_learn_start'=>'required',
            'course_learn_end'=>'required',
            'course_online',
            'image_course',

        ]);

        Backoffice::find($id)->update($request->all());
        return redirect('/backoffice');
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
        Backoffice::find($id)->delete();
        return  redirect('/backoffice');
    }
}
