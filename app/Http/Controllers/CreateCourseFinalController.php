<?php

namespace App\Http\Controllers;

use App\Models\Create_Course_Final;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\course_final_images;

class CreateCourseFinalController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test(Request $request)
    {
        echo 'aasd';
        return view('test/test');
    }

    public function create(Request $request)
    {
        // return view('test/test');
        $id = Auth::id();
        // $gen = $request->input('generation');

        echo $id;

        $flight = Create_Course_Final::create([
            'user_id' => $id,
            'generation' => $request->input('generation'),
            'corse_name' => $request->input('corse_name'),
            'location' => $request->input('location'),
            // 'month_start' => 'London to Paris',
            // 'month_end' => 'London to Paris',
        ]);





        // if($request->ajax()){
        //     $input = $request->all();
        //     // $data = array(
        //     //     'generation' => $input['generation'],
        //     //     'corse_name' => $input['corse_name'],
        //     //     'location' => $input['location']

        //     //  );

        //     $id = Auth::id();
        //     $flight = Create_Course_Final::create([
        //     'user_id' => $id,
        //     'generation' => $input['generation'],
        //     'corse_name' => $input['corse_name'],
        //     'location' => $input['location'],
        //     // 'month_start' => 'London to Paris',
        //     // 'month_end' => 'London to Paris',
        // ]);
        // return back();
        // }


        // echo $generation;
        // echo $corse_name;


        // return back();
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
                $file->move('image', $name);

                echo $images[] = $name;

                course_final_images::insert([
                    'course_final_id' => 67,
                    'user_id' => $id,
                    'images_path' =>  time() . '.' . $file->getClientOriginalName(),

                ]);
            }
        }
        // return view('test/test');
        // return back()->with('success', 'Data Your files has been successfully added');
    }

    public function destroyImagecourses($course_final_id)
    {
        $id = Auth::id();
        $delete = course_final_images::where('course_final_images_id', '=', $course_final_id)->delete();

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
