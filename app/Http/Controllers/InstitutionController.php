<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

use App\Models\CourseSchoolDetail;
use App\Models\Schools;
use App\Course;
use App\Models\Course_day;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_thumbnail;
class InstitutionController extends Controller
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

        //  $dataCount = DB::select('SELECT COUNT(`course_id`) AS "count" ,`course_school` FROM courses GROUP BY `course_school`' );
         $schoolsdetails =  Schools::select(
            'schools.schools_id',
            'schools.schools_owner',
            'schools.schools_name',
            'schools.school_image',
            )
         ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
         ->distinct()
         ->where('status' , '=' , 1)
        ->get();

        $countCourse = Course::select(
           'courses.course_school',
           DB::raw('count(courses.course_school) as countcourse'),
       )
        ->where('status' , '=' , 1)
        ->join('schools', 'schools.schools_id', '=', 'courses.course_school')
        ->groupBy( 'courses.course_school',)
        ->get();

        $allshchool = Schools::where('status' , '=' , 1)
       ->select('schools.schools_id','schools.schools_name')
       ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
       ->distinct()
        ->get();

        return view('institution.Institution')->with(compact('schoolsdetails','countCourse','allshchool'));

    }


    public function institution()
    {

        return view('institution/institution');
    }

    public function profileinstitution($schools_id)
    {
        $school_ID = $schools_id;
        // dd($school_ID);
        $count = Course::where('course_school','=',$school_ID)
       ->whereIn('status',[1])
        ->count();
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
            ->where('course_school', '=', $school_ID)
            ->get();

        // echo $coursesdetails;
        $courseDay =  Course_day::select(
            'day_id',
            'course_final_id',
            'course_day'
        )
            ->distinct('course_final_id')
            ->get();
        // echo $school_id;
         $schoolsdetails =  Schools::where('schools_id', $school_ID)
            ->get();

             $thumbnail = Course_thumbnail::select(
                'course_id',
                DB::raw('MAX(thumbnails_images) as thumbnails_images')
                )
            ->groupBy('course_id')
            ->get();


        return view('institution/profileinstitution')->with(compact('schoolsdetails','coursesdetails','thumbnail','courseDay','count'));
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

        // $dataCount = DB::select('SELECT COUNT(`course_id`) AS "count" ,`course_school` FROM courses GROUP BY `course_school`');


        // return view('institution.Institution')->with(compact('courseschooldetails'));
        $search = $request->input('search');
        // $search = $request->validate([
        //     'search' => 'required',
        // ]);

        // dd($search);


            if($search != 'ทั้งหมด'){
                $schoolsdetails =  Schools::select(
                    'schools.schools_id',
                    'schools.schools_owner',
                    'schools.schools_name',
                    'schools.school_image',
                    )
                 ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
                 ->distinct()
                ->where('schools.schools_name','LIKE',$search)
                 ->where('status' , '=' , 1)
                ->get();
            }else{
                $schoolsdetails =  Schools::select(
                    'schools.schools_id',
                    'schools.schools_owner',
                    'schools.schools_name',
                    'schools.school_image',
                    )
                 ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
                 ->distinct()
                 ->where('status' , '=' , 1)
                ->get();
            }


            $countCourse = Course::select(
               'courses.course_school',
               DB::raw('count(courses.course_school) as countcourse'),
           )
            ->where('status' , '=' , 1)
            ->join('schools', 'schools.schools_id', '=', 'courses.course_school')
            ->groupBy( 'courses.course_school',)
            ->get();

            $allshchool = Schools::where('status' , '=' , 1)
       ->select('schools.schools_id','schools.schools_name')
       ->join('courses', 'courses.course_school', '=', 'schools.schools_id')
       ->distinct()
        ->get();

        // dd($searchchools);
        return view('institution.Institution')->with(compact('schoolsdetails','countCourse','allshchool'));
        // return view('institution.search', compact('searchchools'));
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

    //    public function search()
    //    {
    //
    //
    //        $search_text = $_GET['search'];
    //
    //        $institutions = Institution::where('school_name','LIKE','%'.$search_text.'%')->with('Institution')->get();
    //
    //        return view('institution.search',compact('institutions'));
    //
    //    }

}
