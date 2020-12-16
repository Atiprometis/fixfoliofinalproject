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

        <h1 class="center my-2"> เพิ่มคอร์สเรียน </h1>

        {!! Form::open(['action' => 'BackofficeController@store', 'method'=>'POST']) !!}

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('course_name','ชื่อคอร์ส') !!}
                {!! Form::text('course_name',null,["class"=>"form-control"]) !!}

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('course_category','หมวดหมู่') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_category">
                    <option>อาหาร</option>
                    <option>ตัดเย็บ</option>
                    <option>เสริมสวย</option>
                    <option>ช่าง</option>
                    <option>ภาษา</option>
                    <option>นวด</option>
                    <option>งานฝีมือ</option>
                </select>

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('course_certificate','ใบประกาศนียบัตร') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_certificate">
                    <option >มี</option>
                    <option >ไม่มี</option>

                </select>

            </div>

            <div class="form-group">

                {!! Form::label('course_cost','ราคา') !!}
                {!! Form::number('course_cost',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','รายละเอียดคอร์ส') !!}
                {!! Form::textarea('course_detail',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','Link Youtube') !!}
                {!! Form::text('course_youtube',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('course_open','เปิดรับสมัคร') !!}
                {!! Form::date('course_open',null,["class"=>"form-control"]) !!}


            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','ปิดรับสมัคร') !!}
                {!! Form::date('course_close',null,["class"=>"form-control"]) !!}


            </div>

            <div class="form-group">

                {!! Form::label('course_hours','เรียนทั้งหมดกี่ชั่วโมง') !!}
                {!! Form::number('course_hours',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('course_start','เรียนวันไหน') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_start">
                    <option>จันทร์</option>
                    <option>อังคาร</option>
                    <option>พุธ</option>
                    <option>พฤหัสบดี</option>
                    <option>ศุกร์</option>
                    <option>เสาร์</option>
                    <option>อาทิตย์</option>
                </select>
                {!! Form::label('course_end','ถึง') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_end">
                    <option>จันทร์</option>
                    <option>อังคาร</option>
                    <option>พุธ</option>
                    <option>พฤหัสบดี</option>
                    <option>ศุกร์</option>
                    <option>เสาร์</option>
                    <option>อาทิตย์</option>
                </select>

            </div>

            <div class="form-group">

                {!! Form::label('course_learn_start','เริ่มเรียนกี่โมง') !!}
                {!! Form::time('course_learn_start',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('course_learn_end','เลิกเรียนกี่โมง') !!}
                {!! Form::time('course_learn_end',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('course_online','เรียนออนไลน์หรือไม่ ?') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_online">
                    <option>คอร์สออนไลน์</option>
                    <option>ไม่มีคอร์สออนไลน์</option>
                </select>

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','รูปคอร์ส') !!}
                <input type="file" name="image_course" class="form-control">

            </div>

        </div>

        <div class="col my-2">

            <input type="submit" value="บันทึก" class="btn btn-primary">
            <a href="/backoffice" class="btn btn-success">กลับ</a>

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


