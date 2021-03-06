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
        ->where('number_role','=',null)
        ->get();
        return view('dashbord.admin.addschool')->with(compact('userall'));
    }

    public function addNewschool(Request $request)
    {
        $schools_name = $request->input('schools_name');
         $schools_detail = $request->input('schools_detail');
         $schools_owner = $request->input('schools_owner');

         $facebook = $request->input('facebook');
         $phone = $request->input('phone');
         $line = $request->input('line');
         $email = $request->input('email');

        //  dd($schools_name);
         Schools::insert(
             ['schools_name' => $schools_name,
             'schools_detail' => $schools_detail,
             'schools_owner' => $schools_owner,

             'facebook' => $facebook,
             'phone' => $phone,
             'line' => $line,
             'email' => $email,
             ]
         );

         User::where('id','=',$schools_owner)
        ->update([
            'role' => 'admin',
            'number_role' => '1',
        ]);

        return Redirect::to('/showschool');

    }

    public function deleteschool($id,$owner)
    {
        //
// dd($owner);
        Schools::where(
            'schools_id', '=', $id,
            )
            ->delete();

        User::where('id','=',$owner)
            ->update([
                'role' => null,
                'number_role' => null,
        ]);

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
            'course_thumbnails.thumbnails_images',
            'courses.image_herobanner',
        )
        ->join('schools', 'schools.schools_id', '=', 'courses.course_school')
        ->join('course_thumbnails','course_thumbnails.course_id','=','courses.course_id')
        ->get();

        $courseDay =  Course_day::select(
            'day_id',
            'course_final_id',
            'course_day'
        )
            ->distinct('course_final_id')
            ->get();

            $Coursecareer = Course_career::select(
                'courses.course_id',
                'course_career.course_career_detail'

          )
            ->join('courses','courses.course_id','=','course_career.course_id')
            ->get();

            $Courselearn = Course_learn::select(
                'courses.course_id',
                'course_learn.course_learnning_detail'

          )
            ->join('courses','courses.course_id','=','course_learn.course_id')
            ->get();

            $Courseresult = Course_result::select(
                'courses.course_id',
                'course_result.course_learn_finish_detail'

          )
            ->join('courses','courses.course_id','=','course_result.course_id')
            ->get();

            $Courseyoutube = Course_youtube::select(
                'courses.course_id',
                'course_youtube.youtube_link'

          )
            ->join('courses','courses.course_id','=','course_youtube.course_id')
            ->get();



        return view('dashbord.admin.approvecourse')->with(compact('courseallForSchool','courseDay','Courselearn','Courseyoutube','Courseresult','Coursecareer'));
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
    public function approveadmin()
    {
         $userall = User::select('*')
        ->where('role','=',null)
        ->orWhere('number_role','=',null)
        ->get();

        $adminall = User::select('*')
        ->where('role','=','superadmin')
        ->orWhere('role','=','admin')
        ->get();
        return view('dashbord.admin.approveadmin')->with(compact('adminall','userall'));
    }
    public function setadmin(Request $request)
    {
        $schools_id = $request->input('schools_owner');;
        // dd($schools_id);
        User::where('id','=',$schools_id)
        ->update([
            'role' => 'admin',
            'number_role' => '1',
        ]);
        return back()->withInput();
    }
    public function setsuperadmin(Request $request)
    {
        $schools_id = $request->input('schools_owner');;
        // dd($schools_id);
        User::where('id','=',$schools_id)
        ->update([
            'role' => 'superadmin',
            'number_role' => '2',
        ]);
        return back()->withInput();
    }
    public function deleteadmin($id_user)
    {

        $id = Auth::id();
        // dd($id_user);
        if($id_user == $id){
            // dd($id_user);
            return back()->withInput();
        }
        else{
            User::where('id','=',$id_user)
            ->update([
                'role' => null,
                'number_role' => null,
            ]);

            return back()->withInput();
        }


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
