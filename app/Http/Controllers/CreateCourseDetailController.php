<?php

namespace App\Http\Controllers;

use App\Backoffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateCourseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $id = Auth::id();
//        $findRow = DB::select('SELECT MAX(`course_id`) AS id FROM `courses` WHERE `course_school` = Auth::id()');
        $findRow = DB::table('courses')->WHERE('course_school',Auth::id())->MAX('id');
        $dataForCourseDetail = Backoffice::all();
        return view('backoffice.create_course_detail', compact('dataForCourseDetail','findRow'));
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
        $request->validate([

            'course_learn'=>'required',
            'course_result'=>'required',
            'course_career'=>'required',

        ]);

        DB::table('courses')
            ->where('id', $id)
            ->update([
                'course_learn' => $id,
                'course_result' => $id,
                'course_career' => $id

            ]);


        for ($i = 0;$i < count($request->course_learn); $i++) {

            $course_learn[] = [
                'course_learn_id' => $id."0000".$i+1,
                'course_name' => $request->course_learn[$i],
                'course_learn' => $id,
                'course_id' => $id,
            ];

        }

        DB::table('course_learn')
            ->insert($course_learn);

        for ($i = 0;$i < count($request->course_result); $i++) {

            $course_result[] = [
                'course_result_id' => $id."0000".$i+1,
                'course_result_name' => $request->course_result[$i],
                'course_result' => $id,
                'course_id' => $id,
            ];

        }

        DB::table('course_result')
            ->insert($course_result);

        for ($i = 0;$i < count($request->course_career); $i++) {

            $course_career[] = [
                'course_career_id' => $id."0000".$i+1,
                'course_career_name' => $request->course_career[$i],
                'course_career' => $id,
                'course_id' => $id,
            ];

        }

        DB::table('course_career')
            ->insert($course_career);

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
    }
}
