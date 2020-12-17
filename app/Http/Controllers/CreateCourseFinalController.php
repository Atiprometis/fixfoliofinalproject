<?php

namespace App\Http\Controllers;

use App\Models\Create_Course_Final;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCourseFinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $input = $request->all();
        $images = array();

        $countimages = 0;
        $id = Auth::id();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {

                $name = time() . '.' . $file->getClientOriginalName();
                $file->move(public_path() . '/courseimages/', $name);
                // $file->move('image', $name);

                // echo $images[] = $name;

                Create_Course_Final::insert([
                    'images_path' =>  time() . '.' . $file->getClientOriginalName(),
                    'user_id' => $id,
                ]);
            }
        }
        return back()->with('success', 'Data Your files has been successfully added');
    }

    public function destroyImagecourses($course_final_id)
    {
        $id = Auth::id();
        $delete = Create_Course_Final::where('course_final_id', '=', $course_final_id)->delete();

        return back();

        // return redirect()->action([PortfolioController::class, 'profileedit' ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Create_Course_Final  $create_Course_Final
     * @return \Illuminate\Http\Response
     */
    public function show(Create_Course_Final $create_Course_Final)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Create_Course_Final  $create_Course_Final
     * @return \Illuminate\Http\Response
     */
    public function edit(Create_Course_Final $create_Course_Final)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Create_Course_Final  $create_Course_Final
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Create_Course_Final $create_Course_Final)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Create_Course_Final  $create_Course_Final
     * @return \Illuminate\Http\Response
     */
    public function destroy(Create_Course_Final $create_Course_Final)
    {
        //
    }
}
