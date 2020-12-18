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

use PDO;

class PortfolioController extends Controller
{
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
        // echo  $user = Auth::user();
        $id = Auth::id();
        $profiledatas = ProfilePortfolio::where('user_id', '=', $id)
            ->get();

        $avatar_images = UploadImages::where('user_id', '=', $id)
            ->get();
        // echo $profiledatas;
        // echo $avatar_image;
        return view('portfolio/portfoliopage')->with(compact('profiledatas', 'avatar_images'));
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

        $users = ProfilePortfolio::where('user_id', '=', $id)
            ->get();

        //  echo   $imagecourses = Create_Course_Final::select(
        //     'course_final_id',
        //     'user_id',
        //     'generation',
        //     'corse_name',
        //     'location',
        //  )
        // //  ->where('user_id', '=', $id)
        // //  ->join('course_final_images', 'create_course_finals.course_final_id', '=', 'course_final_images.course_final_id')
        // // ->groupBy('course_final_id')
        //  ->where('create_course_finals.user_id', '=', $id)
        // ->get();
         $imagecourses = Create_Course_Final::where('user_id', '=', $id)

        ->get();

          $imagecoursefinals = course_final_images::select(
            'course_final_images_id',
            'images_path',
            'course_final_id',

        )
        ->where('course_final_id', '=', 67)
        ->get();

        // echo $imagecourses;
        return view('portfolio/profileedit')->with(compact('avatar_images', 'users', 'imagecourses','imagecoursefinals'));
    }


    public function updateprofile(Request $request, $id)
    {
        // $name = $request->input('name');
        $profile_location = $request->input('profile_location');
        $profile_aboutme = $request->input('profile_aboutme');
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
        $users = ProfilePortfolio::where('user_id', '=', $id)
            ->update(array(
                'profile_location' => $profile_location,
                'profile_aboutme' => $profile_aboutme,
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
        // $users = DB::table('profile_portfolios')->where('user_id', '=', $id)
        echo $id;
        // return redirect()->route('institution');
        return redirect('/portfolio');
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
