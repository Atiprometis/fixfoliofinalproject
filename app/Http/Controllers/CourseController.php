<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $readSchoolname = DB::select('SELECT courses.course_id, schools.schools_name, courses.course_name, courses.course_category, courses.course_cost, courses.course_start, courses.course_end, courses.course_learn_start, courses.course_learn_end, courses.course_hours FROM schools INNER JOIN courses ON courses.course_school = schools.schools_id');

        return view('course/course',compact('readSchoolname'));

    }

    public function viewcoursedetail(){
        return view('course.course-detail');
    }
//    public function course(){
//        return view('course/course');
//    }


    public function registercourse(){
        return view('course/course-register');
    }


//    public function coursedetail(){
//        return view('course/course-detail');
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

        $dataHomeEdit = Course::find($id);

        $callCourse_learn = DB::select('SELECT course_learn.course_id, course_learn.course_learnning_detail FROM course_learn INNER JOIN courses ON course_learn.course_id = courses.course_learn');

        $callCourse_result = DB::select('SELECT course_result.course_id, course_result.course_learn_finish_detail FROM course_result INNER JOIN courses ON course_result.course_id = courses.course_result');

        $callCourse_career = DB::select('SELECT course_career.course_id, course_career.course_career_detail FROM course_career INNER JOIN courses ON course_career.course_id = courses.course_career');

        return view('course/course-detail', compact('dataHomeEdit','callCourse_learn','callCourse_result','callCourse_career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $dataCourse = Course::find($id);

        return view('course.course-detail', compact('dataCourse'));

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
