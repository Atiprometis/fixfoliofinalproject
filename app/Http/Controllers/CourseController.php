<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Course_day;
use App\Models\Schools;
use App\Models\Corses\Course_thumbnail;
use Illuminate\Support\Facades\Auth;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;

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
        $id = Auth::id();
        $readSchoolname = DB::select('SELECT
        courses.course_id,
        schools.schools_name,
        courses.course_name,
        courses.course_category,
        courses.course_cost,
        courses.course_start,
        courses.course_end,
        courses.course_learn_start,
        courses.course_learn_end,
        courses.course_hours
        FROM schools
        INNER JOIN courses ON courses.course_school = schools.schools_id');

        // Course::select('
        // course_id,
        // ')

          $allcourses =  Course::select(
            // DB::raw('count(course_school_details.school_name) as countcourse'),
            'courses.course_id',
            'courses.course_school',
            'courses.course_name',
            'courses.course_hours',
            'courses.course_cost',
            'courses.course_learn_start',
            'courses.course_learn_end',
            'courses.status',

        )
            ->join('course_day', 'course_day.course_final_id', '=', 'courses.course_id')
            ->orderBy('courses.course_id', 'DESC')
            ->distinct('courses.course_id')
            ->where('courses.status', '=', 1)
            ->get();

            // echo $allcourses;

            $courseDay =  Course_day::select(
                'day_id',
                'course_final_id',
                'course_day'
            )
                ->distinct('course_final_id')
                ->get();
                // echo $courseDay;

              $schoolsName =  Schools::select(
                  'schools.schools_id',
                  'courses.course_school',
                    'schools.schools_name',
                )
                ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
                ->distinct('schools.schools_id')

                // ->where('schools.schools_id', '=', 'courses.course_school')
                ->get();

                // echo $schoolsName;


                $thumbnail = Course_thumbnail::select(
                    'course_id',
                    DB::raw('MAX(thumbnails_images) as thumbnails_images')
                    )
                ->groupBy('course_id')
                ->get();
                // echo $thumbnail;

        return view('course/course')->with(compact('allcourses','courseDay','schoolsName','thumbnail'));

    }

    public function viewcoursedetail($id){

    //     $dataHomeEdit = Course::all();
    //     dd($dataHomeEdit);

    //     return view('course.course-detail',compact('dataHomeEdit'));
    // }

        $courseID = $id;
        return view('course.course-detail')->with(compact('courseID'));
    }

//    public function course(){
//        return view('course/course');



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
    public function show($course_id)
    {
        //

        $courseID = $course_id;
        $courseAll = Course::where('course_id', '=', $courseID)
        ->first();

        $callCourse_learn = Course_learn::where('course_id', '=', $courseID)
        ->get();

        $callCourse_result = Course_result::where('course_id', '=', $courseID)
        ->get();

        $callCourse_career = Course_career::where('course_id', '=', $courseID)
        ->get();

        $callCourse_youtube = Course_youtube::where('course_id', '=', $courseID)
        ->get();


        // $callCourse_learn = DB::select('SELECT course_learn.course_id, course_learn.course_learnning_detail FROM course_learn INNER JOIN courses ON course_learn.course_id = courses.course_learn');

        // $callCourse_result = DB::select('SELECT course_result.course_id, course_result.course_learn_finish_detail FROM course_result INNER JOIN courses ON course_result.course_id = courses.course_result');

        // $callCourse_career = DB::select('SELECT course_career.course_id, course_career.course_career_detail FROM course_career INNER JOIN courses ON course_career.course_id = courses.course_career');


         return view('course/course-detail', compact('courseAll','callCourse_learn','callCourse_result','callCourse_career','callCourse_youtube'));
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
