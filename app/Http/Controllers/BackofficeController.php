<?php

namespace App\Http\Controllers;

use App\Backoffice;
use Cartalyst\Sentinel\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courseData = Backoffice::all();

        return view('backoffice.dashboard', compact(['courseData']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backoffice.create_course');
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
        $countCourse = DB::table('course_detail')
            ->count('id');

        $request->validate([

            'course_school_name'=>'required',
            'course_name'=>'required',
            'course_type'=>'required',
            'course_certificate'=>'required',
            'course_price'=>'required',
            'course_text_detail'=>'required',
            'course_learnning'=>'required',
            'course_learn_finish'=>'required',
            'course_career'=>'required',
            'course_linkYoutube',
            'course_open'=>'required',
            'course_close'=>'required',
            'course_hours'=>'required',
            'course_date',
            'course_learn_start'=>'required',
            'course_learn_end'=>'required',
            'course_pattern'=>'required',
            'course_pic',
            'course_pic_study',
            'course_school_link'=>'required',

        ]);

        DB::table('course_detail')
            ->insert([

                'id'=>$countCourse+1,
                'course_school_name'=>$request->course_school_name,
                'course_name'=>$request->course_name,
                'course_type'=>$request->course_type,
                'course_certificate'=>$request->course_certificate,
                'course_price'=>$request->course_price,
                'course_text_detail'=>$request->course_text_detail,
                'course_learnning'=>$countCourse+1,
                'course_learn_finish'=>$countCourse+1,
                'course_career'=>$countCourse+1,
                'course_linkYoutube'=>$request->course_linkYoutube,
                'course_open'=>$request->course_open,
                'course_close'=>$request->course_close,
                'course_hours'=>$request->course_hours,
                'course_date'=>$request->course_date,
                'course_learn_start'=>$request->course_learn_start,
                'course_learn_end'=>$request->course_learn_end,
                'course_pattern'=>$request->course_pattern,
                'course_pic'=>$request->course_pic,
                'course_pic_study'=>$countCourse+1,
                'course_school_link'=>$request->course_school_link,

            ]);


        for ($i = 0;$i < count($request->course_learnning); $i++) {

            $course_learnning[] = [
                'course_id' => $countCourse+1,
                'course_learnning_detail' => $request->course_learnning[$i]
            ];

        }

        DB::table('course_learnning')
            ->insert($course_learnning);

//        -----------------

        for ($i = 0;$i < count($request->course_learn_finish); $i++) {

            $course_learn_finish[] = [
                'course_id' => $countCourse+1,
                'course_learn_finish_detail' => $request->course_learn_finish[$i]
            ];

        }

        DB::table('course_learn_finish')
            ->insert($course_learn_finish);

//        ---------------------------------------------------------------------------------------------------------

        for ($i = 0;$i < count($request->course_career); $i++) {

            $course_career[] = [
                'course_id' => $countCourse+1,
                'course_career_detail' => $request->course_career[$i]
            ];

        }

        DB::table('course_career')
            ->insert($course_career);

        return redirect('/backoffice');

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
        $courseData = Backoffice::find($id);

        return view('backoffice.edit_course', compact(['courseData']));
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
        $request -> validate([

            'course_school_name'=>'required',
            'course_name'=>'required',
            'course_type'=>'required',
            'course_certificate'=>'required',
            'course_price'=>'required',
            'course_text_detail'=>'required',
            'course_linkYoutube'=>'required',
            'course_open'=>'required',
            'course_close'=>'required',
            'course_hours'=>'required',
            'course_date'=>'required',
            'course_learn_start'=>'required',
            'course_learn_end'=>'required',
            'course_pattern'=>'required',
            'course_pic'=>'required',
            'course_school_link'=>'required',

        ]);

        Backoffice::find($id)->update($request->all());
        return redirect('/backoffice');
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
        Backoffice::find($id)->delete();
        return  redirect('/backoffice');
    }
}
