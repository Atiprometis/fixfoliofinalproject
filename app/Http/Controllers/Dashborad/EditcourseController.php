<?php

namespace App\Http\Controllers\Dashborad;

use App\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Course;
use App\Models\Schools;
use App\Models\Course_day;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_thumbnail;

class EditcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $courseID = $id;

         $courseAll = Course::where('course_id', '=', $courseID)
         ->get();


        return view('dashbord.editcourse')->with(compact('courseID','courseAll'));
    }
    public function changeAboutCourse(Request $request)
    {
         $courseID = $request->input('courseID');
         $course_category = $request->input('course_category');
         $course_name = $request->input('course_name');
         $course_cost = $request->input('course_cost');
         $course_certificate = $request->input('course_certificate');
         $course_detail = $request->input('course_detail');

         $courseAll = Course::where('course_id', '=', $courseID)
         ->update([
             'course_name' => $course_name,
             'course_category'=> $course_category,
             'course_cost'=> $course_cost,
             'course_certificate' => $course_certificate,
             'course_detail' => $course_detail,
         ]);
        //  ->get();


         return back()->withInput();
    }



    public function detecourse($id)
    {
        $courseID = $id;
         $courseAll = Course::where('course_id', '=', $courseID)
         ->get();

         $results = json_decode($courseAll);

         $return = implode(",", array_column($results, "course_id"));


         $course_day = DB::table('course_day')
         ->select(
            //  DB::raw('MAX(day_id) as da'),
            //  'day_id',
            'course_final_id',
            'user_id',
            'course_day'

        )
        ->where('course_final_id', '=', $return)
        ->distinct()
        // ->groupBy('course_final_id', )
        ->get();

        $user_idDay = DB::table('course_day')
         ->select(
            'user_id',
            'course_final_id',
        )
        ->where('course_final_id', '=', $return)
        ->limit(1)
        ->get();

        $results = json_decode($user_idDay);

        $user_id = implode(",", array_column($results, "user_id"));
        $course_final_id = implode(",", array_column($results, "course_final_id"));

        return view('dashbord.editcourseDate')->with(compact('courseID','courseAll','course_day','user_id','course_final_id'));
    }
    public function changeDate(Request $request)
    {
         $courseID = $request->input('courseID');
         $course_open = $request->input('course_open');
         $course_close = $request->input('course_close');
         $course_hours = $request->input('course_hours');
         $course_learn_start = $request->input('course_learn_start');
         $course_learn_end = $request->input('course_learn_end');
         $course_online = $request->input('course_online');
         $course_day = $request->input('course_day');
         $user_id = $request->input('user_id');
         $course_final_id = $request->input('course_final_id');
        //  dd($course_online);

          $courseAll = Course::where('course_id', '=', $courseID)
         ->update([
             'course_open' => $course_open,
             'course_close' => $course_close,
             'course_hours'=> $course_hours,
             'course_learn_start'=> $course_learn_start,
             'course_learn_end' => $course_learn_end,
             'course_online' => $course_online,
         ]);

            if($course_day != null){
                echo 'no null';
                // dd($course_final_id);


                $affectedRows = Course_day::where(
                    'course_final_id', '=', $course_final_id,

                    )
                    ->delete();

                    $dataDayToDB = [];
                    foreach ($course_day as $day) {
                        $dataDayToDB[] = [
                            'course_final_id'  => $course_final_id ,
                            'user_id' => $user_id,
                            'course_day' => $day,
                        ];
                    }

                    // dd($dataDayToDB);
                    $courseday = Course_day::insert($dataDayToDB);


            }else{
                echo "null";
                return back()->withInput();
            }


         return back()->withInput();
    }

    public function detailcourse($id)
    {
        // dd($id);
         $courseID = $id;

          $Course_learn = Course_learn::where('course_id', '=', $courseID)
         ->get();
          $countcourseLearn = Course_learn::where('course_id', '=', $courseID)
        ->count();
         $countlearn = $countcourseLearn * -1 ;

         $Course_career = Course_career::where('course_id', '=', $courseID)
         ->get();
         $countcourseCareer= Course_career::where('course_id', '=', $courseID)
         ->count();
        $countcareer = $countcourseCareer * -1 ;


         $Course_result = Course_result::where('course_id', '=', $courseID)
         ->get();
         $Course_youtube = Course_youtube::where('course_id', '=', $courseID)
         ->get();

        return view('dashbord.editcourseDetail')->with(compact('courseID','Course_career','Course_learn','countlearn','countcareer'));
    }

    public function imagecourse($id)
    {
        $courseID = $id;
        return view('dashbord.editcourseImage')->with(compact('courseID'));
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
