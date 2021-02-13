<?php

namespace App\Http\Controllers;

use App\Models\Create_Course_Final;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\course_final_images;
use Illuminate\Support\Facades\DB;
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

        $id = Auth::id();


          Create_Course_Final::create([
            'user_id' => $id,
            'generation' => $request->input('generation'),
            'corse_name' => $request->input('corse_name'),
            'location' => $request->input('location'),
        ]);

        $course_id = Create_Course_Final::where('user_id','=',$id)
        ->select(
            DB::raw('MAX(course_final_id) as course_final_id')
        )
        ->get();

        $course_id = json_decode($course_id);
        $return = implode(",", array_column($course_id, "course_final_id"));

        // dd($return);

        // course_final_images::create([
        //     'course_final_id' => $return,
        //     'user_id' => $id,
        // ]);

        $input = $request->all();

        // $images = $request->file('images');
        $images = array();
            // dd($images);
        $countimages = 0;
        $id = Auth::id();
        $imagesToDB = [];
        if ($files = $request->file('images')) {
            // dd($files);
            foreach ($files as $file) {
                $name = $id. '.' .time() . '.' . $file->getClientOriginalName();
                $file->move(public_path() . '/courseimages/', $name);
                $imagesToDB[] = [
                    'course_final_id'  => $return ,
                    'user_id'    => $id,
                    'images_path' => $name,
                ];
                // $file->move('image', $name);
                //  $images[] = $name;
            }

        }
          $imageDB =  course_final_images::insert($imagesToDB);

        // dd($imagesToDB);
// dd($images);

        return back()->withInput();
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
