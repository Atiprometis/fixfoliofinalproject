<?php

namespace App\Http\Controllers;

use App\Course;
use App\Home;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index()
    {

//        SELECT course_detail.course_id,course_detail.course_name,course_learn_finish.course_learn_finish_detail
//        FROM course_detail
//        INNER JOIN course_learn_finish
//        ON course_detail.course_id = course_learn_finish.course_id
//        SELECT
//        TIME_FORMAT(opentime, "%H:%i") as opentime,
//        TIME_FORMAT(closetime, "%H:%i") as closetime
//        FROM hours;


        $dataHome = DB::select('SELECT courses.id, school.school_name, courses.course_name, courses.course_category, courses.course_cost, courses.course_start, courses.course_end, courses.course_learn_start, courses.course_learn_end, courses.course_hours FROM school INNER JOIN courses ON courses.course_school = school.course_school');


        return view('home/homepage', compact('dataHome'));


    }
    public function test()
    {
         return view('home');
        // return view('component/header');

    }

    public function home()
    {
//HEAD
//        return view('home2');
        // error_log('message here.');
        return view('home/homepage');

// main
        // return view('component/header');

    }

//    public function course(){
//        return view('course/course');
//    }
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
        $dataHomeEdit = Home::find($id);

        $callCourse_learn = DB::select('SELECT course_learn.course_id, course_learn.course_name FROM course_learn INNER JOIN courses ON course_learn.course_id = courses.course_learn');

        $callCourse_result = DB::select('SELECT course_result.course_id, course_result.course_result_name FROM course_result INNER JOIN courses ON course_result.course_id = courses.course_result');

        $callCourse_career = DB::select('SELECT course_career.course_id, course_career.course_career_name FROM course_career INNER JOIN courses ON course_career.course_id = courses.course_career');

        return view('home/home-course-detail', compact('dataHomeEdit','callCourse_learn','callCourse_result','callCourse_career'));
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
