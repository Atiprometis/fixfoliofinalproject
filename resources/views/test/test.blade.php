
@extends('layout.master')

@section('title', 'TEST')


@section('content')

    {{-- <div class="container">
        <button id="success">Success</button>
    </div>

    <div id="dialog" title="show" style="display: none">
        <div>
            <p class=" p-0 m-0">รุ่นที่</p>
            <input type="text">
        </div>
        <div>
            <p class=" p-0 m-0">ชื่อหลักสูตร</p>
            <input type="text">
        </div>
        <div>
            <p class=" p-0 m-0">สถานที่ศึกษาจบ</p>
            <input type="text">
        </div>
        <div>
            <p class=" p-0 m-0">อัพโหลดรูปภาพ</p>
            <input name="upload[]" type="file" multiple="multiple" />
        </div>

        <button>ยืนยัน</button>
        <button data-role="close">ยกเลิก</button>

    </div>

    <button id="opener">เปิด</button> --}}
    <div id = 'msg'>This message will be replaced using Ajax.
        Click the button to replace the message.</div>
     <?php
        echo Form::button('Replace Message',['onClick'=>'getMessage()']);
     ?>

@endsection

