<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateCourse;
use App\Models\Schools;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $Createcourses =  CreateCourse::all();
        $id = Auth::id();

        $schools = Schools::all();

        $createcourses =  CreateCourse::where('user_id', $id)
            ->get();

        // $users = Auth::user();


        // echo $schools;
        // echo $Createcourses;
        // echo $users;
        // echo $id;
        // foreach ($users as $user) {

        // echo $users;
        // echo 'sadasd';
        // }

        // foreach ($Createcourses as $Createcourse) {
        //     echo $Createcourse->course_id;

        //     echo $Createcourse->course_name;

        //     echo $Createcourse->user_id;
        //     echo '<br>';
        // }
        return view('kepp/test')->with(compact('createcourses', 'schools'));
    }

    public function uploadphoto()
    {
        return view('upload/upload');
    }
    public function test(Request $request)
    {
        echo 'aasd';
        return view('test/test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // $id = Auth::id();

        // DB::table('schools')->insert(
        //     ['schools_owner' => $id, 'schools_name' => 'Ma la di', 'schools_detail' => 'ทำอาหารนะจ๊ะ']
        // );

        return view('upload/upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////Save upload image to 'avatar' folder which in 'storage/app/public' folder
        // $id = Auth::id();
        $path = $request->file('image')->store('upload', 'public');
        //echo $path;
        //Save $path to database or anything else
        //...
        return redirect('/');
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
