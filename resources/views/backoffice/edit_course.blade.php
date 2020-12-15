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

        <h1 class="center my-2"> แก้ไขคอร์สเรียน </h1>

        {!! Form::open(['action' => ['BackofficeController@update',$courseData->id], 'method'=>'PUT']) !!}

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('Course Detail','ชื่อคอร์ส') !!}
                <input type="text" name="course_name" class="form-control" value="{{$courseData->course_name}}">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('Course Type','หมวดหมู่') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_type">
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

                {!! Form::label('Course Learned','ใบประกาศนียบัตร') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_certificate">
                    <option value="1">มี</option>
                    <option value="0">ไม่มี</option>

                </select>

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','ราคา') !!}
                <input type="text" name="course_price" class="form-control" value="{{$courseData->course_cost}}">

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','รายละเอียดคอร์ส') !!}
                {!! Form::textarea('course_detail',$courseData->course_detail,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','Link Youtube') !!}
                <input type="text" name="course_linkYoutube" class="form-control" value="{{$courseData->course_youtube}}">

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','เปิดรับสมัคร') !!}
                <input type="date" name="course_open" class="form-control" value="{{$courseData->course_open}}">


            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','ปิดรับสมัคร') !!}
                <input type="date" name="course_close" class="form-control" value="{{$courseData->course_close}}">

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','เรียนทั้งหมดกี่ชั่วโมง') !!}
                <input type="text" name="course_hours" class="form-control" value="{{$courseData->course_hours}}">

            </div>

            <div class="form-group">

                {!! Form::label('course_start','เรียนวันไหน') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_start">
                    <option>{{$courseData->course_start}}</option>
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
                    <option>{{$courseData->course_end}}</option>
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

                {!! Form::label('Course Learned','เริ่มเรียนกี่โมง') !!}
                <input type="time" name="course_learn_start" class="form-control" value="{{$courseData->course_learn_start}}">

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','เลิกเรียนกี่โมง') !!}
                <input type="time" name="course_learn_end" class="form-control" value="{{$courseData->course_learn_end}}">

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','เรียนออนไลน์หรือไม่ ?') !!}
                <select class="form-control" id="exampleFormControlSelect1" name="course_pattern">
                    <option>คอร์สออนไลน์</option>
                    <option>ไม่มีคอร์สออนไลน์</option>
                </select>

            </div>

            <div class="form-group">

                {!! Form::label('Course Learned','รูปคอร์ส') !!}
                <input type="text" name="course_pic" class="form-control" value="{{$courseData->image_course}}">

            </div>

{{--            <div class="table-responsive">--}}

{{--                {!! Form::label('Course Learned','รูปประกอบการเรียน') !!}--}}

{{--                <table class="table table-bordered" id="dynamic_field3">--}}

{{--                    <tr>--}}

{{--                        <td>--}}

{{--                            <input type="text" name="course_pic_study[]" placeholder="รูปประกอบการเรียน" class="form-control">--}}

{{--                        </td>--}}

{{--                        <td>--}}

{{--                            <button type="button" name="add3" id="add3" class="btn btn-success">เพิ่ม</button>--}}

{{--                        </td>--}}

{{--                    </tr>--}}

{{--                </table>--}}

{{--            </div>--}}

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
                $('#dynamic_field').append('<tr id="row1'+i+'"><td><input type="text" name="course_learnning[]" class="form-control course_learnning_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove1">ลบ</button></td></tr>')

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
                $('#dynamic_field1').append('<tr id="row2'+i+'"><td><input type="text" name="course_learn_finish[]" class="form-control course_learnning_list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove2">ลบ</button></td></tr>')

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
                $('#dynamic_field3').append('<tr id="row4'+i+'"><td><input type="text" name="course_pic_study[]" class="form-control course_pic_study"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-remove4">ลบ</button></td></tr>')

            })

            $(document).on('click', '.btn-remove4', function () {

                let button_id = $(this).attr('id');
                $('#row4'+button_id+'').remove();

            })

        })

    </script>


@endsection


