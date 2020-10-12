@extends('layout.app')

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

        <h1 class="center"> แก้ไขข้อมูลคอร์สเรียน </h1>

        {!! Form::open(['action' => ['BackofficeController@update', $courseData->id], 'method'=>'PUT']) !!}

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('Course Name') !!}
                {!! Form::text('course_name',$courseData->course_name,["class"=>"form-control"]) !!}

            </div>

            <div class="form-group">

                {!! Form::label('Course Type') !!}
                {!! Form::text('course_type',$courseData->course_type,["class"=>"form-control"]) !!}

            </div>

            <input type="submit" value="ยืนยัน" class="btn btn-primary">

            <a href="/backoffice" class="btn btn-success">กลับ</a>

        </div>

        {!! Form::close() !!}

    </div>

@endsection
