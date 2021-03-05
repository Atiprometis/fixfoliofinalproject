<?php

namespace App\Http\Controllers\Dashborad;

use App\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    public function __construct()
    {
          $this->middleware('auth');
    }
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
         $course_promote = $request->input('course_promote');
        //  dd($course_online);

          $courseAll = Course::where('course_id', '=', $courseID)
         ->update([
             'course_open' => $course_open,
             'course_close' => $course_close,
             'course_hours'=> $course_hours,
             'course_learn_start'=> $course_learn_start,
             'course_learn_end' => $course_learn_end,
             'course_online' => $course_online,
             'image_herobanner'=> $course_promote,
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
        // $course_id = $request->input('course_id');

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
         $countcourseResult= Course_result::where('course_id', '=', $courseID)
         ->count();
         $countresult = $countcourseResult * -1 ;

         $Course_youtube = Course_youtube::where('course_id', '=', $courseID)
         ->get();
         $countcourseYoutube= Course_youtube::where('course_id', '=', $courseID)
         ->count();
        $countyoutube = $countcourseYoutube * -1 ;

        return view('dashbord.editcourseDetail')->with(compact('courseID','Course_career','Course_result',
        'Course_learn','Course_youtube','countlearn','countcareer','countresult','countyoutube'));
    }

    public function changeAboucourse(Request $request){

        $course_id = $request->input('course_id');
        $course_learn = $request->input('course_learn');
        $course_result = $request->input('course_result');
        $course_career = $request->input('course_career');
        $course_youtube = $request->input('course_youtube');


        if($course_learn != null){
            echo 'no null';
            // dd($course_final_id);

            $affectedRows = Course_learn::where(
                'course_id', '=', $course_id,
                )
                ->delete();

                $datalearnToDB = [];
                foreach ($course_learn as $learn) {
                    $datalearnToDB[] = [
                        'course_id'  => $course_id ,
                        'course_learnning_detail'    => $learn,
                    ];
        }
                // dd($datalearnToDB);
                $courseday = Course_learn::insert($datalearnToDB);
                // return back()->withInput();

        }else{
            echo "null";
            return back()->withInput();
        }

        if($course_result != null){
            echo 'no null';
            // dd($course_final_id);

            Course_result::where(
                'course_id', '=', $course_id,
                )
                ->delete();

                    $dataresultToDB = [];
            foreach ($course_result as $result) {
                $dataresultToDB[] = [
                    'course_id'  => $course_id ,
                    'course_learn_finish_detail' => $result,
                ];
            }
            // print_r($dataresultToDB);
            // dd($dataresultToDB);
            Course_result::insert($dataresultToDB);
                // return back()->withInput();

        }else{
            echo "null";
            return back()->withInput();
        }

        if($course_career != null){
            echo 'no null';
            // dd($course_final_id);

            Course_career::where(
                'course_id', '=', $course_id,
                )
                ->delete();

                $datacareerToDB = [];
                foreach ($course_career as $career) {
                    $datacareerToDB[] = [
                        'course_id'  => $course_id ,
                        'course_career_detail'    => $career,
                    ];
                }
                // print_r($datacareerToDB);
                Course_career::insert($datacareerToDB);
                // return back()->withInput();

        }else{
            echo "null";
            return back()->withInput();
        }

        if($course_youtube != null){
            echo 'no null';
            // dd($course_final_id);

            Course_youtube::where(
                'course_id', '=', $course_id,
                )
                ->delete();

                $datayoutubeToDB = [];
                foreach ($course_youtube as $youtube) {
                    $datayoutubeToDB[] = [
                        'course_id'  => $course_id ,
                        'youtube_link'    => $youtube,
                    ];
                }
                // print_r($datayoutubeToDB);
                Course_youtube::insert($datayoutubeToDB);
                return back()->withInput();

        }else{
            echo "null";
            return back()->withInput();
        }


    }

    public function imagecourse($id)
    {
        $courseID = $id;
        $thumbnail = Course_thumbnail::where('course_id' , '=', $courseID)
        ->first();
        return view('dashbord.editcourseImage')->with(compact('courseID','thumbnail'));
    }
    public function editImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $courseID = $request->input('courseID');;
        $imageData = $request->image->getClientOriginalName();
        $id = Auth::id();
        $thumbnailsName = $id. '.' .time() . '.' . $imageData;

        // dd($thumbnailsName);
        $request->image->move(public_path('course/thumbnail'), $thumbnailsName);

        // dd($imagesToDB);
         Course_thumbnail::where('course_id','=',$courseID)
         ->update([
            'thumbnails_images' => $thumbnailsName,
        ]);

        return redirect('/manegercourse');
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
