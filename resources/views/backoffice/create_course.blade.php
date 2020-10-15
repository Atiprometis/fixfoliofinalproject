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

        <h1 class="center"> เพิ่มคอร์สเรียน </h1>

        {!! Form::open(['action' => 'BackofficeController@store', 'method'=>'POST']) !!}

        <div class="col-md-6">

            <div class="form-group">

                {!! Form::label('Course Name','ชื่อคอร์ส') !!}
                <input type="text" name="course_name" class="form-control">

            </div>

        </div>

        <div class="col-md-6">

                <div class="form-group">

                    {!! Form::label('Course Type','หมวดหมู่') !!}
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>อาหารไทย</option>
                        <option>อาหารญี่ปุ่น</option>
                        <option>หัตถกรรม</option>
                        <option>วิทยาศาสตร์</option>
                        <option>คณิตศาสตร์</option>
                    </select>

                </div>

            </div>

            <div class="col">

                <div class="form-group">

                    {!! Form::label('Course Detail','รายละเอียดคอร์ส') !!}
                    <textarea for="course_detail" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>

                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">

                    {!! Form::label('Course Learned','คอร์สนี้เรียนแล้วได้อะไรบ้าง') !!}
                    <input type="text" name="course_learned[]" class="form-control">

                </div>

                <button class="btn btn-outline-info form-control" type="button" name="add" id="add">เพิ่ม</button>

            </div>

            <div class="col my-2">

                <input type="submit" value="บันทึก" class="btn btn-primary">

                <a href="/backoffice" class="btn btn-success">กลับ</a>

            </div>

        {!! Form::close() !!}

    </div>

@endsection
