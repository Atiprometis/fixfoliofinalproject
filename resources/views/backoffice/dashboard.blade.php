@extends('layout.app')

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

            @foreach($courseData as $row)
                <tr>
                    <th scope="row">{{$row->id}}
                    <td>{{$row->course_name}}</td>
                    <td>{{$row->course_school_name}}</td>
                    <td>{{$row->course_type}}</td>
                    <td>

                        <a href="{{route('backoffice.edit', $row->id)}}" class="btn btn-success">แก้ไข</a>

                    </td>
                    <td>

                        <form action="{{route('backoffice.destroy', $row->id)}}" method="POST">

                            @csrf @method('DELETE')

                            <input type="submit" value="ลบ" data-name="{{$row->course_name}}" class="btn btn-danger deleteForm">

                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection
