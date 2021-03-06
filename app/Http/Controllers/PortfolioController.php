<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ProfilePortfolio;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\UploadImages;
use App\Models\Create_Course_Final;
use App\Models\course_final_images;
use App\Models\Exp_work;
use App\User;

use PDO;

class PortfolioController extends Controller
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
    }
    public function portfolio()
    {

        $id = Auth::id();
         $profiledatas = ProfilePortfolio::where('user_id', '=', $id)

            ->orderBy('id', 'desc')

            ->first();

         $avatar_images = UploadImages::where('user_id', '=', $id)

            ->get();

         $users = ProfilePortfolio::where('user_id', '=', $id)
            ->select(

                'user_id',
                DB::raw('MAX(profile_aboutme) as profile_aboutme'),
            )
            ->groupBy('user_id')
                ->get();

                $courseandimage = Create_Course_Final::select(

                    'create_course_finals.generation',
                    'create_course_finals.corse_name',
                    'create_course_finals.location',
                    'create_course_finals.course_final_id',
                    'create_course_finals.user_id'
                )
                ->where('create_course_finals.user_id', '=', $id)
                ->distinct()

                ->get();

                  $imagecoursefinals = course_final_images::select(
                    'course_final_images_id',
                    'course_final_id',
                    'images_path',

                )
                ->where('user_id', '=', $id)
                ->get();

            //    dd($imagecoursefinals);
                // dd($imagecoursefinals);
             $expworks = Exp_work::where('user_id', '=', $id)->get();


        return view('portfolio/portfoliopage')->with(compact('profiledatas', 'avatar_images','expworks','imagecoursefinals','courseandimage','users'));
    }

    public function searchportfolio()
    {
        return view('portfolio/search-portfolio');
    }

    public function profileedit()
    {
        $id = Auth::id();
        $avatar_images = UploadImages::where('user_id', '=', $id)
            ->get();
        // echo $profiledatas;
        // echo $avatar_images;
        $profiledatas = ProfilePortfolio::where('user_id', '=', $id)

            ->orderBy('id', 'desc')

            ->first();

        $users = ProfilePortfolio::where('user_id', '=', $id)
        ->select(

            'user_id',
            'profile_location',
            DB::raw('MAX(profile_aboutme) as profile_aboutme'),
        )
        ->groupBy('user_id','profile_location')
            ->get();


        //  $imagecourses = Create_Course_Final::where('user_id', '=', $id)

        // ->get();

         $courseandimage = Create_Course_Final::select(

            'create_course_finals.generation',
            'create_course_finals.corse_name',
            'create_course_finals.location',
            'create_course_finals.course_final_id',
            'create_course_finals.user_id'
        )
        ->where('create_course_finals.user_id', '=', $id)
        ->distinct()

        ->get();

          $imagecoursefinals = course_final_images::select(
            'course_final_images_id',
            'course_final_id',
            'images_path',

        )
        ->where('user_id', '=', $id)
        ->get();

    //    dd($imagecoursefinals);
        // dd($imagecoursefinals);
     $expworks = Exp_work::where('user_id', '=', $id)->get();

        // echo $imagecourses;
        return view('portfolio/profileedit')->with(compact('avatar_images', 'users','courseandimage','imagecoursefinals','expworks','profiledatas'));
    }
    public function updatestatusprofile(Request $request){
        $status_id = $request->input('status');
        // dd($id);
        $iduser = Auth::id();
         if($status_id != 0){
            ProfilePortfolio::where('user_id', '=', $iduser)
            ->update([
                'status' => 0
            ]);
         }else{
            ProfilePortfolio::where('user_id', '=', $iduser)
            ->update([
                'status' => 1
            ]);
         }
         return redirect()->back()->withInput();;

    }

    public function updateFnameSname(Request $request){
         $name = $request->input('name');
         $lastname = $request->input('lastname');
        $profile_location = $request->input('profile_location');
        $profile_aboutme = $request->input('profile_aboutme');
        // dd($profile_aboutme);
         $id = Auth::id();

        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'lastname' => $lastname,
            ]);

        ProfilePortfolio::where('user_id', '=', $id)
        ->update(array(
            'profile_location' => $profile_location,
            'profile_aboutme' => $profile_aboutme,
        ));
        // echo $id;
        return back();
        // return redirect('/portfolio');
    }

    public function updateprofile(Request $request)
    {
        // $name = $request->input('name');
        $profile_age = $request->input('profile_age');
        $profile_sex = $request->input('profile_sex');
        $profile_instinct = $request->input('profile_instinct');
        $profile_province = $request->input('profile_province');
        $profile_education = $request->input('profile_education');
        $profile_facebook = $request->input('profile_facebook');
        $profile_phone = $request->input('profile_phone');
        $profile_email = $request->input('profile_email');
        $profile_line = $request->input('profile_line');

        $id = Auth::id();

        // dd($profile_phone);
        $users = ProfilePortfolio::where('user_id', '=', $id)
            ->update(array(

                'profile_age' => $profile_age,
                'profile_sex' => $profile_sex,
                'profile_instinct' => $profile_instinct,
                'profile_province' => $profile_province,
                'profile_education' => $profile_education,
                'profile_facebook' => $profile_facebook,
                'profile_phone' => $profile_phone,
                'profile_email' => $profile_email,
                'profile_line' => $profile_line,

            ));

        // return redirect('/portfolio');
        return back();
    }

    public function expwork(Request $request)
    {

        $id = Auth::id();
        $flight = Exp_work::create([
            'user_id' => $id,
            'position' => $request->input('position'),
            'company' => $request->input('company'),
            'county' => $request->input('county'),
            'province' => $request->input('province'),
            'year' => $request->input('year'),
            'month' => $request->input('month'),

        ]);

        return back();
    }

    public function expworkUpdate(Request $request)
    {

        $id = Auth::id();
        $courseid =  $request->input('exp_works_id');
        // dd($courseid);
        $courseAll = Exp_work::where('exp_works_id', '=', $courseid)
         ->update([
            'position' => $request->input('positionUpdate'),
            'company' => $request->input('companyUpdate'),
            'county' => $request->input('countyUpdate'),
            'province' => $request->input('provinceUpdate'),
            'year' => $request->input('yearUpdate'),
            'month' => $request->input('monthUpdate'),
         ]);

        return back();
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $id = Auth::id();

       $status = ProfilePortfolio::select('status')
       ->where('user_id','=',$id)
        ->get();

        $statusresults = json_decode($status);
        $return = implode(",", array_column($statusresults, "status"));

         $flight = UploadImages::firstOrCreate(['user_id' => $id]);

         if($return == null) {
            $user = ProfilePortfolio::firstOrCreate([
                'user_id' => $id,
                'status' => 0,
                ]);
         }  else if($return == 1){
            $user = ProfilePortfolio::firstOrCreate([
                'user_id' => $id,
                'status' => 1,
                ]);
         }
         return back();
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
        $request->validate([

            'auth-name' => 'required'

        ]);
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

    }
}
