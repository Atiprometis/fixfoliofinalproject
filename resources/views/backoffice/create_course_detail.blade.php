@extends('layout.master')

@section('content')

    <div class="container">

        @if ($errors->all())
            <ul class="alert-danger">

                @foreach($errors->all() as $error)

                    <li>

                        {{$error}}

                    </li>

                @endforeach

            </ul>
        @endif

        <h1 class="center my-2"> เพิ่มรายละเอียดคอร์สเรียน </h1>

        {!! Form::open(['action' => ['CreateCourseDetailController@update',$findRow], 'method'=>'PUT']) !!}

        <div class="col-md-6">

            <div class="table-responsive">

                {!! Form::label('Course Learned','เรียนอะไรบ้าง') !!}

                <table class="table table-bordered" id="dynamic_field">

                    <tr>

                        <td>

                            <input type="text" name="course_learn[]" placeholder="เรียนอะไรบ้าง" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add" id="add" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','เรียนจบแล้วทำอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field1">

                    <tr>

                        <td>

                            <input type="text" name="course_result[]" placeholder="เรียนจบแล้วทำอะไรได้" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add1" id="add1" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

            <div class="table-responsive">

                {!! Form::label('Course Learned','ประกอบอาชีพอะไรได้') !!}

                <table class="table table-bordered" id="dynamic_field2">

                    <tr>

                        <td>

                            <input type="text" name="course_career[]" placeholder="ประกอบอาชีพอะไรได้" class="form-control">

                        </td>

                        <td>

                            <button type="button" name="add2" id="add2" class="btn btn-success">เพิ่ม</button>

                        </td>

                    </tr>

                </table>

            </div>

        </div>

        <div class="col my-2">

            <input type="submit" value="บันทึก" class="btn btn-primary">

            <a href="/backoffice/create" class="btn btn-success">กลับ</a>

        </div>

        {!! Form::close() !!}

    </div>

    <script>

        $(document).ready(function() {

            let i = 1;
            $('#add').click(function() {

                i++;
                $('#dynamic_field').append('<tr id="row1'+i+'"><td><input type="text" name="course_learn[]" class="form-control course_learn_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove1">ลบ</button></td></tr>')

            })

            $(document).on('click', '.btn-remove1', function () {

                let button_id = $(this).attr('id');
                $('#row1'+button_id+'').remove();

            })

        })

    </script>

    <script>

        $(document).ready(function() {

            let i = 1;
            $('#add1').click(function() {

                i++;
                $('#dynamic_field1').append('<tr id="row2'+i+'"><td><input type="text" name="course_result[]" class="form-control course_learnning_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove2">ลบ</button></td></tr>')

            })

            $(document).on('click', '.btn-remove2', function () {

                let button_id = $(this).attr('id');
                $('#row2'+button_id+'').remove();

            })

        })

    </script>

    <script>

        $(document).ready(function() {

            let i = 1;
            $('#add2').click(function() {

                i++;
                $('#dynamic_field2').append('<tr id="row3'+i+'"><td><input type="text" name="course_career[]" class="form-control course_career"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove3">ลบ</button></td></tr>')

            })

            $(document).on('click', '.btn-remove3', function () {

                let button_id = $(this).attr('id');
                $('#row3'+button_id+'').remove();

            })

        })

    </script>

    <script>

        $(document).ready(function() {

            let i = 1;
            $('#add3').click(function() {

                i++;
                $('#dynamic_field3').append('<tr id="row4'+i+'"><td><input type="file" name="image_herobanner[]" class="form-control course_pic_study"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove4">ลบ</button></td></tr>')

            })

            $(document).on('click', '.btn-remove4', function () {

                let button_id = $(this).attr('id');
                $('#row4'+button_id+'').remove();

            })

        })

    </script>


@endsection


