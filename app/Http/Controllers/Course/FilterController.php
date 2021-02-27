<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Schools;
use App\Models\Corses\Course_thumbnail;
use Illuminate\Support\Facades\Auth;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_type;
use App\Models\Course_day;
class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


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
        $cost = $request->input('cost');
        $typecourse = $request->input('typecourse');
        $month = $request->input('month');
        $learn = $request->input('learn');

        // dd($month);
        // $validated = $request->validate([
        //     'cost' => 'required',
        //     'typecourse' => 'required',
        //     'month' => 'required',
        //     'learn' => 'required',
        // ]);

        if($cost <= 500 ){
            $costfix = 100;
        }
        else if($cost <= 1000){
            $costfix = 501;
        }
        else if($cost <= 2000){
            $costfix = 1001;
        }
        else if($cost > 2000){
            $costfix = 2000;
        }
        // dd($costfix);
        if($cost <= 2000){
            $allcourses = Course::select('*')
        ->where( 'course_cost', '<=' , $cost )
        ->where( 'course_cost', '>=' , $costfix )
        ->where('course_category','LIKE','%'.$typecourse.'')
        ->whereMonth('course_open', '=', $month)
        ->where('course_online','LIKE',''.$learn.'%')
        ->where( 'status', '=' ,1 )
        ->paginate(6);
        // ->get();
        }
         if($cost > 2000){
            $allcourses = Course::select('*')
        ->where( 'course_cost', '>' , $cost )

        ->where('course_category','LIKE','%'.$typecourse.'')
        ->whereMonth('course_open', '=', $month)
        ->where('course_online','LIKE',''.$learn.'%')
        ->where( 'status', '=' ,1 )
        ->paginate(6);
        // ->get();
        }

        $thumbnail = Course_thumbnail::select(
            'course_id',
            DB::raw('MAX(thumbnails_images) as thumbnails_images')
            )
        ->groupBy('course_id')
        ->get();
        // echo $thumbnail;
        $course_type = Course_type::select('*')
        ->get();

        $courseDay =  Course_day::select(
            'day_id',
            'course_final_id',
            'course_day'
        )
            ->distinct('course_final_id')
            ->get();

            $schoolsName =  Schools::select(
                'schools.schools_id',
                'courses.course_school',
                  'schools.schools_name',
              )
              ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
              ->distinct('schools.schools_id')

              // ->where('schools.schools_id', '=', 'courses.course_school')
              ->get();

        return view('course/course')->with(compact('allcourses','courseDay','schoolsName','thumbnail','course_type'));
        // dd($courseall);

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
