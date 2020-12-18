<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

use App\Models\CourseSchoolDetail;
use App\Models\Schools;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dataCount = DB::select('SELECT COUNT(`course_id`) AS "count" ,`course_school` FROM courses GROUP BY `course_school`');


        //         SELECT `course_id`, `school_id`, `school_name`, COUNT(school_name) FROM `course_school_details`
        // GROUP BY `school_name`

        //         SELECT schools.school_image FROM `course_school_details`
        // INNER JOIN schools
        // ON course_school_details.school_id = schools.schools_id

        // $courseschooldetails = DB::table('course_school_details')
        //     // ->where('course_school_details.school_id', '=', $school_id)

        //     ->join('schools', 'schools.schools_id', '=', 'course_school_details.school_id')
        //     ->select(
        //         DB::raw('count(course_school_details.school_name) as countcourse'),
        //         'course_school_details.school_id',
        //         'course_school_details.school_name',
        //         'schools.school_image',


        //     )

        //     ->groupBy('course_school_details.school_name', 'school_id', 'schools.school_image')
        //     ->get();

        $courseschooldetails =  CourseSchoolDetail::select(
            DB::raw('count(course_school_details.school_name) as countcourse'),
            'course_school_details.school_id',
            'course_school_details.school_name',
            'schools.school_image'
        )

            ->join('schools', 'schools.schools_id', '=', 'course_school_details.school_id')
            // ->find('course_school_details.school_name')
            // ->count();distinct
            // ->distinct()
            ->groupBy('course_school_details.school_name', 'school_id', 'schools.school_image')

            ->get();



        // $courseCount = CourseSchoolDetail::select('course_school_details.school_name')->count();

        // $courseschooldetails =  CourseSchoolDetail::all();

        // echo $courseschooldetails;
        // echo $courseCount;


        return view('institution.Institution')->with(compact('courseschooldetails'));
    }


    public function institution()
    {

        return view('institution/institution');
    }

    public function profileinstitution($school_id, $countcourse)
    {

        // SELECT `course_name`, `course_cost` , `course_start`,`course_end`,course_learn_start,`course_learn_end`,`course_hours`,course_school_details.school_name
        // FROM `courses`
        // INNER JOIN course_school_details
        // ON courses.course_id = course_school_details.course_id

        $coursesdetails = DB::table('courses')
            ->where('course_school_details.school_id', '=', $school_id)
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
            // ->where('course_school_details.school_id ', '=', 1)
            ->get();

        // echo $coursesdetails;

        // echo $school_id;
        $schoolsdetails =  Schools::where('schools_id', $school_id)
            ->get();



        // echo $countcourse;
        // echo $schoolsdetails;
        return view('institution/profileinstitution')->with(compact('schoolsdetails', 'countcourse', 'coursesdetails'));
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


        $request->validate([

            'search' => 'required',
        ]);


        $institutions = Institution::where('schools_name', 'like','%'.$request->search.'%')->get();

        $searchchools =  CourseSchoolDetail::select(
            DB::raw('count(course_school_details.school_name) as countcourse'),
            'course_school_details.school_name',
            'course_school_details.school_id',
            'course_school_details.school_name',
            'schools.school_image'
        )
            ->join('schools', 'schools.schools_id', '=', 'course_school_details.school_id')

            ->where('course_school_details.school_name', 'LIKE', '%' . $request->search . '%')
            ->groupBy('course_school_details.school_name', 'school_id', 'schools.school_image')
            ->get();


        return view('institution.search', compact('searchchools'));
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
