<?php

namespace App\Http\Controllers\Admin;

use App\Dashbord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Schools;
use App\User;
use App\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Course_day;
use App\Models\Corses\Course_career;
use App\Models\Corses\Course_learn;
use App\Models\Corses\Course_result;
use App\Models\Corses\Course_youtube;
use App\Models\Corses\Course_thumbnail;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashbord.admin.admin');
    }
    public function showschool()
    {
        //
         $dataschool =  Schools::select(
            'schools.schools_id',
            'schools.schools_owner',
            'schools.schools_name',
            'users.name',
            'users.lastname',

            // 'schools.schools_id',

            )

        ->join('users', 'users.id', '=', 'schools.schools_owner')
         ->get();

        return view('dashbord.admin.makeschools')->with(compact('dataschool'));
    }

    public function addschool()
    {

        $userall = User::select('*')
        ->get();
        return view('dashbord.admin.addschool')->with(compact('userall'));
    }

    public function addNewschool(Request $request)
    {
        $schools_name = $request->input('schools_name');
         $schools_detail = $request->input('schools_detail');
         $schools_owner = $request->input('schools_owner');

        //  dd($schools_name);
         Schools::insert(
             ['schools_name' => $schools_name,
             'schools_detail' => $schools_detail,
             'schools_owner' => $schools_owner,]
         );

        return Redirect::to('/showschool');

    }

    public function deleteschool($id)
    {
        //
        Schools::where(
            'schools_id', '=', $id,
            )
            ->delete();
            return back()->withInput();
        // dd($id);
    }

    public function approvecourse(){


        $id = Auth::id();

        $schools = Schools::where('schools_owner', '=', $id)
        ->select(
            'schools_id',
        )
        ->get();

        $schoolsresults = json_decode($schools);
        $schoolsreturn = implode(",", array_column($schoolsresults, "schools_id"));

        // echo $schoolsreturn;

        $courseallForSchool = Course::select(
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
        )
        ->join('schools', 'schools.schools_id', '=', 'courses.course_school')
        ->get();


        return view('dashbord.admin.approvecourse')->with(compact('courseallForSchool'));
    }

    public function approve($id)
    {
        // dd($id);
        Course::where('course_id','=',$id)
        ->update([
            'status' => 1,
        ]);
        return back()->withInput();
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
