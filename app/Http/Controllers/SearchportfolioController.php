<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfilePortfolio;
use App\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Exp_work;
use App\Models\Create_Course_Final;
use App\Models\course_final_images;
class SearchportfolioController extends Controller
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

        $profile_ports = ProfilePortfolio::select(
            'id',
            'user_id',
            'profile_aboutme',
            'status',
        )
        // ->where('status','=',1)
        ->get();
        $userall = User::select(
            'id',
            'name',
            'lastname')
        ->get();

        $avatar_images = UploadImages::select('*')
            ->get();
        //  json_encode($profile_ports);
        return view('portfolio.search-portfolio',compact('profile_ports','avatar_images','userall'));
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

            'search'=>'required',
        ]);

        $profile_search = Profile::select(

            'profile_portfolios.id', 'users.id', 'users.name', 'users.lastname'

        )
            ->join('users', 'profile_portfolios.user_id','=','users.id')
            ->where('users.name','LIKE','%'.$request->search.'%')
            ->get();

        $profile_image = UploadImages::all();

        return view('portfolio.search',compact('profile_search','profile_image'));
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
        // dd($id);
        // $id = Auth::id();
        $profiledatas = ProfilePortfolio::where('user_id', '=', $id)

           ->orderBy('id', 'desc')

           ->first();
        // dd($profiledatas);
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


            $userall = User::select(
                'id',
                'name',
                'lastname')
            ->where('id','=',$id)
            ->get();

        // echo json_encode($profiledatas);

        return view('portfolio/profile-detail',compact('profiledatas', 'avatar_images','expworks','imagecoursefinals','courseandimage','users','userall'));

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
