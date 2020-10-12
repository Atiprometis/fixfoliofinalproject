@include('component.header')
@extends('layout.master')

@section('title', 'Home Page')


@section('content')
    <div class=" container-fluid">
        <div class="row">
            <img class=" img-fluid col-12 p-0" src="https://f.ptcdn.info/127/055/000/p0u2ez28mA0aNpZ5M0q-o.jpg" alt="Responsive image" style="background-color: red; height: 50vh;">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-5 p-0 ">
                <div class="text-detail  ">
                    <h1 class="col-12 p-0 text-center" style="font-size: 2.250em; font-weight: 500;">รับรองด้วยจำนวนผู้ประกอบการ,ผู้เรียนและคอร์สเรียนทั้งหมด</h1>
                    <p class="font-weight-light col-12 p-0 text-center" style="font-size: 1.625em;">มลภาวะทิป โฟนรวมมิตรร็อค เทค แฟรีโหลยโท่ยคอรัปชั่นไงเบน</p>
                </div>
                <div class=" col-md-12 course-statistics d-md-flex flex-row justify-content-md-around p-0 ">
                    <div class="  d-md-flex flex-column  mt-3 mb-3 col-md-2 p-0 " >
                        <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px; background-color: #69299C;" >
                            <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;">500</h1>
                            <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">ผู้ประกอบการ</p>
                        </div>
                    </div>
                    <div class="  d-md-flex flex-column  mt-3 mb-3 col-md-2  p-0" >
                        <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px;background-color: #FFC00F;" >
                            <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;">1500</h1>
                            <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">ผู้เรียน</p>
                        </div>
                    </div>
                    <div class="  d-md-flex flex-column  mt-3 mb-3 col-md-2  p-0" >

                        <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px;background-color: #7395F9;" >

                            <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;" >256</h1>
                            <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">คอร์ส</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" style="background-color: #F7EDFF">
        <div class=" container">
            <div class="row">
                <div class="col-12 d-flex flex-row pt-5 pb-5 align-items-center ">
                    <div class="box-image col-3  ">
                        <img  class="img-thumbnail bg-light" src=" {{ asset('/access/images/photo-1.png') }}" style="width: 100%; height: 260px;border-radius: 20px; ">
                    </div>
                    <div class=" d-flex flex-column ml-5">
                        <h2 style="font-size: 1.5em; font-werght:300;">เรียนกับเราได้พัฒนาตัวเอง</h2>
                        <h2 class="mb-4" style="font-size: 1.5em;  font-werght:500;">และยังได้ใบประกาศนียบัตรอีกด้วย</h2>
                        <p class="m-0 font-weight-light" style="font-size: 1.2em;">ผู้ใช้สามารถเลือกเรียนได้ ทั้งคอร์สเรียนออนไลน์ที่สามารถเริ่มเรียนเมื่อไร </p>
                        <p class="m-0 font-weight-light"  style="font-size: 1.2em;">ที่ไหนก็ได้ หรือคอร์สเรียนออฟไลน์ ศึกษาลงมือทำที่ศูนย์ฝึก </p>
                        <div class="mt-3">
                            @include('component.button-course-all')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column p-0 m-0 mt-5 mb-5">
                <div class=" d-flex flex-row mb-3">
                    <h1 class="d-flex flex-fill m-0 ml-3 p-0">คอร์สเรียนยอดนิยม</h1>
                    @include('component.button-course-all')
                </div>
                <div class=" d-flex flex-row justify-content-xl-around p-0 m-0">
                    @include('component/course-select-home')
                    @include('component/course-select-home')
                    @include('component/course-select-home')
                </div>
            </div>
        </div>
    </div>
    <div class="contaier">
        <div class="row">
            <div class="col-12 rounded  d-flex flex-row">
                <i class="fas fa-chevron-left"></i>
                <div class=" d-flex flex-column">
                    <img class=" img-thumbnail" src="{{ asset('/access/images/photo-1.png') }}">
                </div>
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
@endsection

