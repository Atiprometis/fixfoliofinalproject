<?php

namespace App\Http\Controllers;

use App\Profile;
use App\ProfilePortfolio;
use App\UploadImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $profile_ports = DB::select('SELECT profile_portfolios.id, users.id, users.name, users.lastname FROM users INNER JOIN profile_portfolios ON profile_portfolios.user_id = users.id');
        $profile_images = UploadImages::all();
        //  json_encode($profile_ports);
        return view('portfolio.search-portfolio',compact('profile_ports','profile_images'));
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

        $profile_id = Profile::find($id);

        $profiledatas = ProfilePortfolio::where('user_id', '=', $id)
            ->get();
        $avatar_images = UploadImages::where('user_id', '=', $id)
            ->get();

        $profile_port = DB::select('SELECT profile_portfolios.id, users.id, users.name, users.lastname FROM users INNER JOIN profile_portfolios ON profile_portfolios.user_id = users.id');

        echo json_encode($profiledatas);

        return view('portfolio/profile-detail',compact('profile_id','profiledatas','avatar_images','profile_port'));

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
