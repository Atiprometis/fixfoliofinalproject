@extends('layouts.app')

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

        <h1 class="center"> เพิ่มคอร์สเรียน </h1>

        {!! Form::open(['action' => 'CourseController@store', 'method'=>'POST']) !!}

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('Course Name') !!}
                {!! Form::text('course_name',null,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('Course Type') !!}
                {!! Form::text('course_type',null,["class"=>"form-control"]) !!}

            </div>

            <input type="submit" value="บันทึก" class="btn btn-primary">

            <a href="/backoffice" class="btn btn-success">กลับ</a>

        </div>

        {!! Form::close() !!}

    </div>

@endsection
