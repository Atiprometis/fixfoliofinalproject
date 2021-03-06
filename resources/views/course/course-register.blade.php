{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'COURSE REGISTER')

@section('content')
    <div class="container" style="background-color: #fff">
        <div class="row">
            <div class="col-12">
                <div class="register-title d-flex flex-column align-items-center p-4">
                    <h1 class="" style="font-size: 1.500em; color: rgb(253,116,155); color: linear-gradient(180deg, rgba(253,116,155,1) 0%, rgba(113,26,200,1) 90%);">สมัครเรียน</h1>
                    <p class="m-0">วิชา {{ $courseall->course_name }}</p>
                    <p class="m-0">ชั่วโมงเรียน {{ $courseall->course_hours }} ชั่วโมง</p>
                    <p class="m-0">วัน
                        @foreach ($courseDay as $day)
                            {{ $day->course_day }}
                        @endforeach

                        เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$courseall->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$courseall->course_learn_end)->format('H:i')}} น.</p>
                </div>
            </div>
        </div>
        <div class="row">


            <div class="col-12 d-flex  flex-column  ">

                {!! Form::open(['url' => 'courseprint', 'method'=>'post','class'=>'needs-validation ','id'=>'checkregister',]) !!}
                {{-- <form class="needs-validation was-validated" > --}}

                    <input type="text" name="course_id" value="{{ $course_id }}" style="display: none">
                    <div class=" form-row col-12 d-flex  flex-column">
                        @include('course.register-form.register-basic')
                        @include('course.register-form.register-aboutme')
                        @include('course.register-form.register-location')
                        @include('course.register-form.register-new')

                        <div class="form-group justify-content-lg-center d-flex flex-row align-items-lg-center">
                            <button type="submit"   class="btn btn-login m-2">สมัครเรียน</button>
                            <button type="button" class="btn btn-facebook m-2">ยกเลิก</button>
                        </div>
                        {{-- <button type="submit">asdasd</button> --}}

                    </div>
                {{-- </form> --}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
