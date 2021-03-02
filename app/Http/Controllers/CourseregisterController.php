<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Courseregister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Models\Course_day;
use App\Models\Schools;

use App\Models\Corses\Data_course_register;
class CourseregisterController extends Controller
{
    public function __construct()
    {
          $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($courseID)
    {
        $course_id = $courseID;
        $courseall = Course::select(
            'course_id',
            'course_name',
            'course_hours',

            'course_learn_start',
            'course_learn_end',

        )
        ->where('course_id','=',$courseID)
        ->where('status','=',1)
        ->first();

        $courseDay =  Course_day::select(
            'day_id',
            'course_final_id',
            'course_day'
        )
        ->where('course_final_id','=',$courseID)
            ->distinct('course_final_id')
            ->get();

           $provinces = DB::table('provinces')
            ->get();

        return view("course/course-register")->with(compact('courseall','courseDay','provinces','course_id'));
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
        //$id = Auth::id();
            $course_id = $request->input('course_id');
            $id = Auth::id();

            $print = $request->validate([
                // 'user_id'=>$id,
                // 'course_id'=>$course_id,
            'name'=>'required',
            'lastname'=>'required',
            'telphone'=>'required',
            'email'=>'required',
            'idcard'=>'required',
            'birthday'=>'required',
            'religion'=>'required',
            'nationality'=>'required',
            'career'=>'required',
            'school'=>'required',
            'branch'=>'required',
            'qualification'=>'required',
            'result'=>'required',
            'dadname'=>'required',
            'momname'=>'required',
            'housenumber'=>'required',
            'swine'=>'required',
            'alley'=>'required',
            'road'=>'required',
            'district'=>'required',
            'county'=>'required',
            'province'=>'required',
            'postalcode'=>'required',
            'housenumber-present'=>'required',
            'swine-present'=>'required',
            'alley-present'=>'required',
            'road-present'=>'required',
            'district-present'=>'required',
            'county-present'=>'required',
            'province-present'=>'required',
            'postalcode-present'=>'required',
        ]);
        // $dataRegister = [];
    //    echo json_encode($print);
        // foreach ($print as $key => $value) {

            $dataRegister[] = [
                'user_id'  =>  $id,
                'course_id'  =>  $course_id,
            ];

        // }
        $dataRegisterToDB = Arr::collapse([$print,$dataRegister[0]]);

        // dd($dataRegisterToDB);
        $courseall = Course::select(
            'course_id',
            'course_name',
            'course_hours',

            'course_learn_start',
            'course_learn_end',

        )
        ->where('course_id','=',$course_id)
        ->where('status','=',1)
        ->first();

        $courseDay =  Course_day::select(
            'day_id',
            'course_final_id',
            'course_day'
        )
        ->where('course_final_id','=',$course_id)
            ->distinct('course_final_id')
            ->get();
// dd($print);s

            Data_course_register::firstOrCreate($dataRegisterToDB);
        return view('print/print', compact('print','course_id','courseall','courseDay'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function show(Courseregister $courseregister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function edit(Courseregister $courseregister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courseregister $courseregister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courseregister  $courseregister
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courseregister $courseregister)
    {
        //
    }
}
