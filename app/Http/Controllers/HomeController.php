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

        $dataHome = DB::table('course_detail')
            ->select('id','course_name','course_type','course_date','course_hours','course_school_name','course_price','course_learn_start','course_learn_end')->paginate(3);
//        $dataHomeTime = DB::select(TIME_FORMAT('course_learn_start', "%H:%i"),TIME_FORMAT('course_learn_end', "%H:%i"));
// error_log('message here.sadas');
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

        return view('home/home-course-detail', compact('dataHomeEdit'));
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
