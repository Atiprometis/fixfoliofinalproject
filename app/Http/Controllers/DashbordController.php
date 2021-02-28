<?php

namespace App\Http\Controllers;

use App\Dashbord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Redirector;

use App\Models\CourseSchoolDetail;
use App\Course;
use App\Models\Schools;
use App\Models\Course_day;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_thumbnail;
use App\Models\Corses\Course_type;
use Dotenv\Result\Result;

use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class DashbordController extends Controller
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
    public function index()
    {
        return view('dashbord.dashbord');
    }
    public function dashcourse()
    {
        $id = Auth::id();
         $schoolsdetails =  Schools::where('schools_owner', '=',$id)
            ->first();

        // $schoolsresults = json_decode($schoolsdetails);
        $schoolsID = $schoolsdetails->schools_id;
        // dd($schoolsID);

         $coursesdetails = Course::select(
            'courses.course_id',
            'courses.course_school',
            'courses.course_name',
            'courses.course_hours',
            'courses.course_cost',
            'courses.status',
            DB::raw('TIME_FORMAT(course_learn_start, "%H:%i") as course_learn_start'),
            DB::raw('TIME_FORMAT(course_learn_end, "%H:%i") as course_learn_end'),
         )
            ->where('course_school', '=', $schoolsID)

            ->get();

            $courseDay =  Course_day::select(
                'day_id',
                'course_final_id',
                'course_day'
            )
                ->distinct('course_final_id')
                ->get();

            $countschool = Course::where('course_school', '=', $schoolsID)
            ->whereIn('status',[1])
            ->count();

            $thumbnail = Course_thumbnail::select(
                'course_id',
                DB::raw('MAX(thumbnails_images) as thumbnails_images')
                )
            ->groupBy('course_id')
            ->get();


        return view('dashbord.dashcourse')->with(compact('schoolsdetails', 'coursesdetails','countschool','thumbnail','courseDay'));
    }
    public function editDataschool(Request $request){
        $detail = $request->input('schools_detail');
        $facebook = $request->input('school_facebook');
        $phone = $request->input('school_phone');
        $line = $request->input('school_line');
        $email = $request->input('school_email');
        $id = Auth::id();

        Schools::where('schools_owner', '=',$id)
        ->update([
            'email' => $email,
            'facebook' => $facebook,
            'line' => $line,
            'phone' => $phone,
            'schools_detail' =>$detail,
        ]);
        return back()->withInput();
    }

    public function dashcreatecourse()
    {
        $course_type = Course_type::select('*')
        ->get();
        return view('dashbord.createcourse')->with(compact('course_type'));
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

        Course::firstOrCreate([
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
        // dd($dataDayToDB);

        Course_day::insert($dataDayToDB);

         $dayData = array([
            'course_day' => $course_day,
        ]);

        // print_r($return);

        $data = array([
            'course_name' => $course_name,
                'course_cost' => $course_cost,
                'course_learn_start' => $course_learn_start,
                'course_learn_end' => $course_learn_end,
                'course_hours' => $course_hours,
        ]);

        return view('dashbord.createcourse_detail')->with(compact('data','dayData','schools','return'));

    }

    public function aboutcourse(Request $request)
    {

        // $course_image= $request->input('myPhoto');


        $id = Auth::id();

        $course_id = $request->input('course_id');
        $course_learn = $request->input('course_learn');
        $course_result = $request->input('course_result');
        $course_career = $request->input('course_career');
        $course_youtube = $request->input('course_youtube');

        // dd($request->input('image'));

        // if ($request->hasFile('image')) {

        //     $this->validate($request, [
        //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageData = $request->image->getClientOriginalName();
         $thumbnailsName =  $id. '.' .time() . '.' . $imageData;

        //  echo $thumbnailsName;
         Course_thumbnail::firstOrCreate([
             'course_id' => $course_id,
             'thumbnails_images'=>$thumbnailsName,
         ]);

         $request->image->move(public_path('course/thumbnail'), $thumbnailsName);
        // echo $thumbnailsName;


        $datalearnToDB = [];
        foreach ($course_learn as $learn) {
            $datalearnToDB[] = [
                'course_id'  => $course_id ,
                'course_learnning_detail'    => $learn,
            ];
        }
        // print_r($datalearnToDB);


        Course_learn::insert($datalearnToDB);

        $dataresultToDB = [];
        foreach ($course_result as $result) {
            $dataresultToDB[] = [
                'course_id'  => $course_id ,
                'course_learn_finish_detail' => $result,
            ];
        }
        // print_r($dataresultToDB);
        Course_result::insert($dataresultToDB);

        $datacareerToDB = [];
        foreach ($course_career as $career) {
            $datacareerToDB[] = [
                'course_id'  => $course_id ,
                'course_career_detail'    => $career,
            ];
        }
        // print_r($datacareerToDB);
        Course_career::insert($datacareerToDB);

        $datayoutubeToDB = [];
        foreach ($course_youtube as $youtube) {
            $datayoutubeToDB[] = [
                'course_id'  => $course_id ,
                'youtube_link'    => $youtube,
            ];
        }
        // print_r($datayoutubeToDB);
        Course_youtube::insert($datayoutubeToDB);
        // echo $request;
        return redirect()->action([DashbordController::class, 'manegerCourse']);


    }



    public function manegerCourse(Request $request)
    {
        $id = Auth::id();

        $schools = Schools::where('schools_owner', '=', $id)
        ->select(
            'schools_id',
        )
        ->get();

        $schoolsresults = json_decode($schools);
        $schoolsreturn = implode(",", array_column($schoolsresults, "schools_id"));

        // echo $schoolsreturn;

      $courseallForSchool = Course::where('course_school', '=', $schoolsreturn)

        ->select(
            'courses.course_id',
            'courses.course_school',
            'courses.course_name',
            'courses.course_category',
            'courses.course_cost',
            'courses.course_detail',
            // 'course_start'=>"",
            // 'course_end'=>"",
            'courses.course_certificate',
            'courses.course_open',
            'courses.course_close',
            'courses.course_hours',
            'courses.course_learn_start',
            'courses.course_learn_end',
            'courses.course_online',
            'courses.status',
            'schools.schools_name',
            'course_thumbnails.thumbnails_images'
        )
        ->join('schools', 'schools.schools_id', '=', 'courses.course_school')
        ->join('course_thumbnails','course_thumbnails.course_id','=','courses.course_id')
        ->get();



    // echo   $thumbnail = Course_thumbnail::select(
    //     'course_thumbnails.course_id as id_thumbnails',
    //       'course_thumbnails.thumbnails_images',
    //       )
    //     ->where('course_school', '=',$schoolsreturn)
    //     ->join('courses','courses.course_id','=','course_thumbnails.course_id')
    //     ->get();
        // echo $courseallForSchool;


        return view('dashbord.manegercourse')->with(compact('courseallForSchool'));
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
    public function deletecourse($id)
    {

        $delete = Course::where('course_id', '=', $id)
        ->delete();
        return back();
    }
    public function destroy(Dashbord $dashbord)
    {
        //
    }
}
