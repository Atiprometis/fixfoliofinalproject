<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\Models\Course_day;
use App\Models\Schools;
use App\Models\Corses\Course_thumbnail;
use Illuminate\Support\Facades\Auth;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_type;
use App\Models\Corses\Data_course_register;
use App\UploadImages;
use App\ProfilePortfolio;
use App\User;
class CourseController extends Controller
{

    // public function __construct()
    // {
    //       $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //  $all = $request->all();
        // print_r($all);
        $id = Auth::id();
        // $datalimit = $request->datalimit;

        $datalimit = 2;
          $allcourses =  Course::select(
            'courses.course_id',
            'courses.course_school',
            'courses.course_name',
            'courses.course_hours',
            'courses.course_category',
            'courses.course_cost',
            'courses.course_online',
            'courses.course_learn_start',
            'courses.course_learn_end',
            'courses.status',

        )
            ->join('course_day', 'course_day.course_final_id', '=', 'courses.course_id')
            ->orderBy('courses.course_id', 'DESC')
            ->distinct('courses.course_id')
            ->where('courses.status', '=', 1)
            ->paginate(6);

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

                // echo $schoolsName;

                $thumbnail = Course_thumbnail::select(
                    'course_id',
                    DB::raw('MAX(thumbnails_images) as thumbnails_images')
                    )
                ->groupBy('course_id')
                ->get();
                // echo $thumbnail;
                $course_type = Course_type::select('*')
                ->get();

                // return response()->json($response);

        return view('course/course')->with(compact('allcourses','courseDay','schoolsName','thumbnail','datalimit','course_type'));

    }

    public function viewcoursedetail($id){


        $courseID = $id;
        return view('course.course-detail')->with(compact('courseID'));
    }

    //     $dataHomeEdit = Course::all();
    //     dd($dataHomeEdit);

    //     return view('course.course-detail',compact('dataHomeEdit'));
    // }

//    public function course(){
//        return view('course/course');
// }





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
        $data = $request->all();
        $response = array(
            'status' => 'success',
            'datalimit' => $request->datalimit,
        );
        // return response()->json($response);

        // return redirect()->action([DashbordController::class, 'manegerCourse']);

        return response()->json($response);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($course_id)
    {
        //$course_id = $request->input('course_id');
        // $category = $request->input('category');
        // dd($category);
        $courseID = $course_id;
        $courseAll = Course::where('course_id', '=', $courseID)
        ->first();

        $coursecategory = Course::where('course_id', '=', $courseID)
        ->get();
        $category = json_decode($coursecategory);
        $returncategory = implode(",", array_column($category, "course_category"));

        $courseRandom = Course::where('course_category', 'LIKE', $returncategory)
        ->inRandomOrder()
        ->limit(3)
        ->where('status','=',1)
        ->where('course_id', '!=', $courseID)
        ->get();

        $callCourse_learn = Course_learn::where('course_id', '=', $courseID)
        ->get();

        $callCourse_result = Course_result::where('course_id', '=', $courseID)
        ->get();

        $callCourse_career = Course_career::where('course_id', '=', $courseID)
        ->get();

        $callCourse_youtube = Course_youtube::where('course_id', '=', $courseID)
        ->get();

        // dd($course_id);
         $data_register = Data_course_register::select(
            'data_course_register.course_register_id',
            'data_course_register.user_id',
            'profile_portfolios.profile_aboutme',
            'profile_portfolios.status',
            'upload_images.avatar_path',

        )
        ->join('profile_portfolios', 'profile_portfolios.user_id', '=', 'data_course_register.user_id')
        ->join('upload_images', 'upload_images.user_id', '=', 'data_course_register.user_id')
        ->orderBy('data_course_register.course_register_id','DESC')
        ->distinct()
        ->where('data_course_register.course_id','=',$courseID)
        ->limit(4)
        ->get();

        // dd($data_register);
        $profile_ports = ProfilePortfolio::select(
            'id',
            'user_id',
            'profile_aboutme',
            'status',
        )
        // ->where('status','=',1)
        ->get();
         $userall =  DB::table('users')
        ->select(
            'users.id',
        'users.name',
        'users.lastname',
        // 'upload_images.avatar_path'
        )
        ->join('upload_images', 'upload_images.user_id', '=', 'users.id')
        ->get();

        $avatar_images = UploadImages::select('*')
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

                // echo $schoolsName;

                $thumbnail = Course_thumbnail::select(
                    'course_id',
                    DB::raw('MAX(thumbnails_images) as thumbnails_images')
                    )
                ->groupBy('course_id')
                ->get();
                // echo $thumbnail;
                $course_type = Course_type::select('*')
                ->get();


         return view('course/course-detail', compact('courseAll','callCourse_learn','callCourse_result',
         'userall','avatar_images','profile_ports','data_register','courseRandom',
         'courseDay','thumbnail','schoolsName',
         'callCourse_career','callCourse_youtube','courseID'));
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
