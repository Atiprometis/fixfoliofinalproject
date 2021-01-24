<?php

namespace App\Http\Controllers;

use App\Dashbord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CourseSchoolDetail;
use App\Models\Schools;
use Dotenv\Result\Result;
use App\Course;
use Illuminate\Support\Facades\Auth;

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

    public function passDatatoCoursedetail(Request $request){



        $input = $request->all();
        // echo $input;
        // $output = json_encode($input);
        // echo $input;
        // print_r($input);



    //    echo  json_encode($input);
         $course_name = $request->input('course_name');
        //  $course_category = $request->input('course_category');
         $course_cost = $request->input('course_cost');
        //  $course_detail = $request->input('course_detail');
        //  $course_certificate = $request->input('course_certificate');
         $course_open = $request->input('course_open');
         $course_close = $request->input('course_close');
         $course_hours = $request->input('course_hours');
        //  $course_learn_start = $request->input('course_learn_start');
        //  $course_online = $request->input('course_online');
        //  $course_learn_end = $request->input('course_learn_end');

        $data = array([
            'course_name' => $course_name,
                'course_cost' => $course_cost,
                'course_open' => $course_open,
                'course_close' => $course_close,
                'course_hours' => $course_hours,
        ]);

        // print_r($data);


        return view('dashbord.createcourse_detail')->with(compact('data'));

        // DB::table('courses')->insert([
        //     'course_school' => 2,
        //     'course_name' => $request->input('course_name'),
        //     'course_category' => $course_category,
        //     'course_cost' => $course_cost,
        //     'course_detail' => $course_detail,
        //     'course_certificate' => $course_certificate,
        //     'course_open' => $course_open,
        //     'course_close' => $course_close,
        //     'course_hours' => $course_hours,
        //     'course_learn_start' => $course_learn_start,
        //     'course_online' => $course_online,
        //     'course_learn_end' => $course_learn_end,
        // ]);

        // $all_courses =  Course::create([
        //     'course_school' => 2,
        //     'course_name' => $request->input('course_name'),
        //     // 'course_category' => $course_category,
            // 'course_cost' => $course_cost,
            // 'course_detail' => $course_detail,
            // 'course_certificate' => $course_certificate,
            // 'course_open' => $course_open,
            // 'course_close' => $course_close,
        // ]);


            // echo $all_courses;
            // echo $all_courses_arrays;
            // echo $test = json_encode($all_courses_arrays);

            // echo $all_courses_arrays;

        // return view('dashbord.createcourse_detail');
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
