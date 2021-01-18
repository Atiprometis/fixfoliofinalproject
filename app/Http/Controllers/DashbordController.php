<?php

namespace App\Http\Controllers;

use App\Dashbord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CourseSchoolDetail;
use App\Models\Schools;

class DashbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashbord.dashbord');
    }
    public function dashcourse()
    {
        $coursesdetails = DB::table('courses')
            ->where('course_school_details.school_id', '=', 1)
            ->join('course_school_details', 'course_school_details.course_id', '=', 'courses.course_id')

            ->select(
                'courses.course_name',
                'courses.course_cost',
                'courses.course_start',
                'courses.course_end',
                DB::raw('TIME_FORMAT(course_learn_start, "%H:%i") as course_learn_start'),
                DB::raw('TIME_FORMAT(course_learn_end, "%H:%i") as course_learn_end'),
                'courses.course_hours',
                'course_school_details.school_name',
                'image_herobanner'
            )
            ->get();

        $schoolsdetails =  Schools::where('schools_id', 1)
            ->get();


        return view('dashbord.dashcourse')->with(compact('schoolsdetails', 'coursesdetails'));
    }

    public function dashcreatecourse()
    {
        return view('dashbord.createcourse');
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
     * @param  \App\Dashbord  $dashbord
     * @return \Illuminate\Http\Response
     */
    public function show(Dashbord $dashbord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dashbord  $dashbord
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashbord $dashbord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dashbord  $dashbord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashbord $dashbord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dashbord  $dashbord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashbord $dashbord)
    {
        //
    }
}
