@extends('layout.master')

@section('content')

    <div class="container">

        <h1 class="center"> DASH BOARD </h1>

        <a href="backoffice/create" class="btn btn-primary my-2"> เพิ่มคอร์สเรียน </a>



        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">รหัส</th>
                <th scope="col">ชื่อคอร์ส</th>
                <th scope="col">ชื่อสถาบัน</th>
                <th scope="col">หมวดหมู่</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
            </tr>
            </thead>
            <tbody>

            <?php
            foreach($readSchoolname as $school):

                if ($school->schools_name === Auth::user()->name) {

                    ?>
                        <tr>

                            <th scope="row">{{$school->course_id}}
                            <td>{{$school->course_name}}</td>
                            <td>{{$school->school_name}}</td>
                            <td>{{$school->course_category}}</td>

                            <td>

                                <a href="{{route('backoffice.edit', $school->course_id)}}" class="btn btn-success">แก้ไข</a>

                            </td>
                            <td>

                                <form action="{{route('backoffice.destroy', $school->course_id)}}" method="POST">

                                    @csrf @method('DELETE')

                                    <input type="submit" value="ลบ" data-name="{{$school->course_name}}" class="btn btn-danger deleteForm">

                                </form>

                            </td>

                        </tr>

            <?php }else if(Auth::user()->name === "Yanapalt") {

                    ?>

                        <tr>

                            <th scope="row">{{$school->course_id}}
                            <td>{{$school->course_name}}</td>
                            <td>{{$school->schools_name}}</td>
                            <td>{{$school->course_category}}</td>

                            <td>

                                <a href="{{route('backoffice.edit', $school->course_id)}}" class="btn btn-success">แก้ไข</a>

                            </td>
                            <td>

                                <form action="{{route('backoffice.destroy', $school->course_id)}}" method="POST">

                                    @csrf @method('DELETE')

                                    <input type="submit" value="ลบ" data-name="{{$school->course_name}}" class="btn btn-danger deleteForm">

                                </form>

                            </td>

                        </tr>


            <?php } endforeach; ?>

            </tbody>
        </table>

    </div>

@endsection
