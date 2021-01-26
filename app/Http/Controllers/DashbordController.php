<?php

namespace App\Http\Controllers;

use App\Dashbord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CourseSchoolDetail;
use App\Models\Schools;
use App\Models\Course_day;
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
                // 'courses.course_start',
                // 'courses.course_end',
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
        $id = Auth::id();
        // echo $input;
        // $output = json_encode($input);
        // echo $input;
        // print_r($input);
    //    echo  json_encode($input);
         $course_name = $request->input('course_name');
         $course_category = $request->input('course_category');
         $course_cost = $request->input('course_cost');

         $course_detail = $request->input('course_detail');
         $course_certificate = $request->input('course_certificate');
         $course_open = $request->input('course_open');
         $course_close = $request->input('course_close');
         $course_hours = $request->input('course_hours');
         $course_learn_start = $request->input('course_learn_start');
         $course_learn_end = $request->input('course_learn_end');
        $course_online = $request->input('course_online');

        $course_day = $request->input('course_day');

        $schools = Schools::where('schools_owner', '=', $id)
        ->select(
            'schools_id',
        )
        ->get();

        $schoolsresults = json_decode($schools);
        $schoolsreturn = implode(",", array_column($schoolsresults, "schools_id"));

        DB::table('courses')
        ->insert([
            'course_school' => $schoolsreturn,
            'course_name'=>$course_name,
            'course_category'=>$course_category,
            'course_cost'=>$course_cost,
            'course_detail'=>$course_detail,
            // 'course_start'=>"",
            // 'course_end'=>"",
            'course_certificate'=>$course_certificate,
            'course_open'=>$course_open,
            'course_close'=>$course_close,
            'course_hours'=>$course_hours,
            'course_learn_start'=>$course_learn_start,
            'course_learn_end'=>$course_learn_end,
            'course_online'=>$course_online,
            'status'=> 0,
        ]);


         $course = DB::table('courses')
        ->where('course_school', '=', $schoolsreturn)
        ->select('course_id',)
        ->orderBy('course_id', 'DESC')
        ->limit(1)
        ->get();

        $results = json_decode($course);
        $return = implode(",", array_column($results, "course_id"));



        $dataDayToDB = [];
        foreach ($course_day as $day) {
            $dataDayToDB[] = [
                'course_final_id'  => $return ,
                'user_id'    => $id,
                'course_day' => $day,
            ];
        }

 Course_day::insert($dataDayToDB);


         $dayData = array([

            'course_day' => $course_day,
        ]);


        $data = array([
            'course_name' => $course_name,
                'course_cost' => $course_cost,
                'course_learn_start' => $course_learn_start,
                'course_learn_end' => $course_learn_end,
                'course_hours' => $course_hours,
        ]);



        return view('dashbord.createcourse_detail')->with(compact('data','dayData','schools'));


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
