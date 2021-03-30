{{-- @include('component.header') --}}

@extends('layout.master')

@section('title', 'Home Page')


@section('content')
<div class="herobanner d-md-block d-sm-none d-none ">

    {{-- <img class=" img-fluid col-12 p-0" src="{{ asset('/access/images/hero-banner-1.png') }}" alt="Responsive image" style="background-color: red; height: 50vh;"> --}}
    <div class="container">
        <div class="row d-flex flex-row" style="height: 50vh;">
            <div class="col-12 d-flex flex-row p-0 ">
                <div class="col-md-5  p-0 text-light d-flex flex-column  justify-content-end align-items-start">
                    <h2 class="dropshadow ">ค้นหาหลักสูตรที่ใช่สำหรับคุณ</h2>
                    <p class="dropshadow">เพื่อพัฒนาตนเอง และนำไปเป็นอาชีพต่อไป</p>
                </div>
                <div class="co-7 h-100 w-100">
                    <div class="col-12 p-0 d-flex flex-row  h-100 w-100 align-items-end justify-content-end" style="">
                        <div class=" d-flex flex-row ">
                            <div class="select-item d-flex flex-row mb-3 " style="width: 100%; ">
                                <a href="/courses">
                                    <button class="btn  " style="
                                        border-radius:20px;
                                        width: 300px;

                                        background-color: #F9C226;
                                        font-size: 1.2em;">
                                        <p class="m-0 p-0" style="font-weight: 500">ค้นหาคอร์สเรียน</p>
                                    </button>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<div class="col-12 col-sm-12 pt-5 pb-5 justify-content-center justify-content-sm-center">
    <button class="btn  d-none d-block d-md-none w-100" style="
                            border-radius:20px;
                            width: 300px;

                            background-color: #F9C226;
                            font-size: 1.2em;">
                            <p class="m-0 p-0" style="font-weight: 500">ค้นหาคอร์สเรียน</p>
     </button>
</div>
<div class="container d-none d-md-block d-sm-none">
    <div class="row">
        <div class="col-md-12 col-sm-12 mt-5 mb-5 p-0 ">
            <div class="text-detail  ">
                <h1 class="col-12 p-0 text-center" style="font-size: 2.250em; font-weight: 500;">รับรองด้วยจำนวนผู้ประกอบการ,ผู้เรียนและคอร์สเรียนทั้งหมด</h1>
                <p class="font-weight-light col-12 p-0 text-center" style="font-size: 1.625em;">เว็บไซต์ที่รวบรวมผู้คนที่รักการพัฒนาตนเองมากที่สุด</p>
            </div>
            <div class=" col-md-12 course-statistics d-md-flex flex-md-row flex-sm-column justify-content-md-around  p-0 ">
                <div class="  d-flex flex-column  mt-3 mb-3 col-md-2 p-0 ">
                    <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px; background-color: #69299C;">
                        <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;">500</h1>
                        <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">ผู้ประกอบการ</p>
                    </div>
                </div>
                <div class="  d-md-flex flex-column  mt-3 mb-3 col-md-2  p-0">
                    <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px;background-color: #FFC00F;">
                        <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;">1500</h1>
                        <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">ผู้เรียน</p>
                    </div>
                </div>
                <div class="  d-md-flex flex-column  mt-3 mb-3 col-md-2  p-0">

                    <div class=" text-center rounded-circle  d-flex align-items-center justify-content-sm-center flex-column" style="width: 200px; height: 200px;background-color: #7395F9;">

                        <h1 class="m-0 text-light" style="font-size: 3em; font-weight: 600;">256</h1>
                        <p class="m-0 text-light" style="font-size: 1em; font-weight: 400;">คอร์ส</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=" " style="background-color: #F7EDFF">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-column pt-5 pb-5 flex-md-row align-items-center ">

                <div class=" m-0 p-0 pb-4">
                    <img class=" bg-light d-block  d-lg-block" src=" {{ asset('/access/images/photo-10.png') }}" style="width: 21vh; height: 21vh;border-radius: 20px; ">
                </div>
                <div class="m-0 p-0 ml-0 ml-md-4  ml-sm-0">
                    <h1 class=" p-0 m-0 text-center text-md-left" style="font-size: 2.6vh; font-weight: 500;">เรียนกับเราได้พัฒนาตัวเอง</h1>
                    <h1 class="text-center text-md-left" style="font-size: 2.6vh;  font-weight:500;">และยังได้ใบประกาศนียบัตรอีกด้วย</h1>
                    <p class="m-0 p-0 font-weight-light text-center text-md-left text-sm-center" style="font-size: 1em;">ผู้ใช้สามารถเลือกเรียนได้ทั้งคอร์สเรียนออนไลน์ที่สามารถ</p>
                    <p class="m-0 font-weight-light text-center text-md-left text-sm-center" style="font-size: 1em;">เริ่มเรียนเมื่อไร ที่ไหนก็ได้ หรือคอร์สเรียนออฟไลน์ศึกษาลงมือทำที่ศูนย์ฝึก</p>
                    <div class="col-12 mt-3 d-flex justify-content-center">
                        <a href="/courses">
                        @include('component.button-course-all')
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="course-all  pt-5">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                <div class=" d-flex flex-row mb-3 justify-content-between align-items-center w-100">
                    <h1 class="p-0 m-0 ml-2 w-100 text-center text-md-left" style="font-size: 1.750em;">คอร์สเรียนล่าสุด</h1>
                    <a href="/courses">
                    <button class="btn   d-none d-sm-none d-md-block " style="
                        border-radius:20px;
                        width: 300px;
                        background-color: #F9C226;
                        font-size: 1.2em;">
                        <p class="m-0 p-0" style="font-weight: 500">ค้นหาคอร์สเรียน</p>
                    </button>
                    </a>
                </div>
            </div>


            <div class="col-12 p-0 m-0">
                @foreach($dataHome as $course)
                <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">
                    <div class=" col-12 col-sm-12 col-md-4  p-2   float-left " >
                        <div class=" w-100 " >
                                <div class=" position-relative">
                                    <div class="d-flex flex-row w-100 justify-content-md-end p-3 position-absolute">

                                    </div>
                                    @foreach ($thumbnail as $image)
                                        @if ($image->course_id == $course->course_id)
                                        <img src="{{ asset('/course/thumbnail/'.$image->thumbnails_images.'') }}" class="insutition-all">

                                        @endif
                                    @endforeach


                                </div>
                            <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 160px">
                                <div class=" d-flex justify-content-between mt-2">
                                    <p class="d-inline-block text-truncate" style="font-size: 1em;">{{$course->course_name}}</p>
                                    <p class="pl-2 mr-3" style="font-size: 1em;font-size: 1rem;">{{$course->course_cost}}</p>
                                </div>
                                <div class=" d-flex flex-row p-0 m-0">
                                    <i class="far fa-calendar-alt fa-1x p-0 m-0" class="ml-2 mr-2"></i>
                                    <p class="ml-2 mr-2 p-0">
                                            @foreach ($courseDay as $day)
                                                @if ($day->course_final_id == $course->course_id)
                                                    <p class="p-0 m-0">{{$day->course_day}}</p> <p class="p-0 m-0"> </p>
                                                @endif
                                            @endforeach
                                    </p>
                                </div>
                                <div class=" d-flex flex-row ">
                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                    <p class="ml-2 mr-2 mb-1 p-0">
                                             เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$course->course_learn_end)->format('H:i')}} น.
                                    </p>
                                </div>
                                <div class=" d-flex flex-column ">
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x p-0 m-0" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2 p-0 m-0">{{$course->course_hours}} ชั่วโมง</p>
                                    </div>

                                    <p class=" " style="font-size: 1em;">
                                        @foreach ($schoolsName as $name)
                                            @if ($name->schools_id == $course->course_school)
                                                    {{$name->schools_name}}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class=" swiper-container col-12 rounded pt-3 pb-3 d-flex w-100 justify-content-md-between flex-row align-items-center p-4" style="background-color: #F7EDFF;">
                <div class="swiper-wrapper">
                        @include('home.component.sildeuser')
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>


        </div>
    </div>
</div>
<div class=" d-none d-lg-block " style="background-color: #69299C">
    <div class="container" style="background-color: #69299C">
        <div class="row d-flex flex-row " style="margin-top: 100px">
            <div class="col-7 p-3 text-light">
                <div class="col-12 d-inline-flex p-1 flex-column align-items-end justify-content-center">
                    <h1 class=" text-break mt-3" style="font-size: 2.3vh; font-weight:600;">ประชาสัมพันธ์หลักสูตรสถาบันของคุณ </h1>
                    <h1 class="mb-4 p-0" style="font-size: 2.3vh; font-weight:600;">ฟรี! ไม่เสียค่าใช้จ่าย</h1>
                    <p class="m-0 p-0" style="font-size: 1.9vh;font-weight:400;">หากท่านเป็นสถาบันหรือสถานที่สอนวิชาชีพต่างๆ</p>
                    <p class="m-0 p-0" style="font-size: 1.9vh;font-weight:400;">ให้เราเป็นอีกทางเลือกในการเข้าถึงคนที่สนใจมากขึ้น</p>
                    <p class="m-0 p-0" style="font-size: 1.9vh;font-weight:400;">“เพราะเราเป็นแหล่งรวบรวมคอร์สเรียนและผู้ใช้ที่รักพัฒนาตนเองมากที่สุด”</p>
                    <button class="btn mt-3 " style="
                        border-radius:30px;
                        width: 300px;

                        background-color: #F9C226;
                        font-size: 1.5em;">
                        <a href="/contact" style="color: inherit;">
                            <p class="m-0 p-0" style="font-weight: 500">สมัครลงหลักสูตร</p>
                        </a>
                    </button>
                </div>


            </div>
            <div  class="col-5 position-relative">
                <img  class=" rounded image-home" style=" height: 350px; width:350px " src="{{ asset('/access/images/photo-5.png') }}">
            </div>

        </div>
    </div>
</div>
<div class=" d-block d-lg-none" style="background-color: #69299C">
    <div class=" container">
        <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-column flex-md-row pt-5 pb-5 align-items-center ">
                <div id="my-sticky-element" class="m-0 p-0 pb-4 pb-md-0">

                    <img class=" bg-light d-block d-sm-block d-md-none" src=" {{ asset('/access/images/photo-5.png') }}" style="width: 200px; height: 200px;border-radius: 20px; ">
                </div>
                <div class=" d-flex flex-column mr-0 mr-sm-0 mr-md-4  ">
                    <h2 class="text-center text-md-right text-light" style="font-size: 2.6vh; font-weight: 500;">ประชาสัมพันธ์หลักสูตรสถาบันของคุณ</h2>
                    <h2 class="mb-4 text-center text-md-right text-light" style="font-size: 2.6vh;  font-weight:500;">ฟรี! ไม่เสียค่าใช้จ่าย</h2>
                    <p class="m-0 font-weight-light text-center text-md-right text-light" style="font-size: 1em;">หากท่านเป็นสถาบันหรือสถานที่สอนวิชาชีพต่างๆ</p>
                    <p class="m-0 font-weight-light text-center text-md-right text-light" style="font-size: 1em;">“เพราะเราเป็นแหล่งรวบรวมคอร์สเรียนและผู้ใช้ที่รักพัฒนาตนเองมากที่สุด”</p>
                    <div class="mt-3 d-flex justify-content-center">
                        <a href="/courses">
                            <button class="btn mt-3 " style="
                            border-radius:30px;
                            width: 300px;

                            background-color: #F9C226;
                            font-size: 1.5em;">
                            <a href="/contact" style="color: inherit;">
                                <p class="m-0 p-0" style="font-weight: 500">สมัครลงหลักสูตร</p>
                            </a>
                            </button>
                        </a>
                    </div>
                </div>
                <div id="my-sticky-element" class="box-image col-12 col-md-4 col-sm-12 d-flex justify-content-center justify-content-sm-center  pb-3 pb-sm-3 pb-md-0">
                    <img class=" bg-light d-none d-md-block" src=" {{ asset('/access/images/photo-5.png') }}" style="width: 260px; height: 260px;border-radius: 20px; ">

                </div>
            </div>
        </div>
    </div>
</div>
<div class=" d-none d-md-none d-lg-block" style="background-color: #7395F9">
    <div class="container" style="background-color: #7395F9">
        <div class="row d-flex flex-row  " style="margin-top: 120px">

            <div class="col-5 position-relative">
                <img  class=" rounded image-home" style=" height: 350px; width:350px " src="{{ asset('/access/images/photo-6.png') }}">
            </div>
            <div class="col-7 text-light" style="padding: 60px 0px 60px 0px">
                <div class="col-12 d-inline-flex p-1 flex-column align-items-start justify-content-center">

                    <h1 class="mb-4 p-0" style="font-size: 1.775em; font-weight:600;">ค้นหาคนที่ใช่สำหรับบริษัทของคุณ</h1>
                    <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">หากคุณกำลังมองหาพนักงานที่ใช่ ทักษะความสามารถที่ตรงใจ</p>
                    <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">เรารวบรวมรายชื่อผู้ที่ผ่านการอบรมหลักสูตรวิชาชีพไว้มากที่สุด</p>
                    <button class="btn mt-3 " style="
                        border-radius:30px;
                        width: 300px;

                        background-color: #F9C226;
                        font-size: 1.5em;">
                        <a href="/searchportfolio" style="color: inherit;">
                            <p class="m-0 p-0" style="font-weight: 500">ค้นหาคนที่ใช่</p>
                        </a>
                        {{-- <p class="m-0 p-0" style="font-weight: 500">สมัครลงหลักสูตร</p> --}}
                    </button>
                </div>


            </div>
        </div>
    </div>
</div>
<div class=" d-block d-lg-none" style="background-color: #7395F9">
    <div class=" container">
        <div class="row">
            <div class="col-12 d-flex flex-column flex-sm-column flex-md-row pt-5 pb-5 align-items-center ">
                <div id="my-sticky-element" class="m-0 p-0 pb-4 pb-md-0">
                    <img class=" bg-light d-none d-md-block" src=" {{ asset('/access/images/photo-6.png') }}" style="width: 260px; height: 260px;border-radius: 20px; ">
                    <img class=" bg-light d-block d-sm-block d-md-none" src=" {{ asset('/access/images/photo-6.png') }}" style="width: 200px; height: 200px;border-radius: 20px; ">
                </div>
                <div class=" d-flex flex-column ml-0 ml-md-5  justify-content-center ">
                    <h2 class="text-center text-md-left text-light" style="font-size: 2.6vh; font-weight: 500;">เรียนกับเราได้พัฒนาตัวเอง</h2>
                    <h2 class="mb-4 text-center text-md-left text-light" style="font-size: 2.6vh;  font-weight:500;">และยังได้ใบประกาศนียบัตรอีกด้วย</h2>
                    <p class="m-0 font-weight-light text-center text-md-left text-light" style="font-size: 1em;">ผู้ใช้สามารถเลือกเรียนได้ทั้งคอร์สเรียนออนไลน์ที่สามารถ</p>
                    <p class="m-0 font-weight-light text-center text-md-left text-light" style="font-size: 1em;">เริ่มเรียนเมื่อไร ที่ไหนก็ได้ หรือคอร์สเรียนออฟไลน์ศึกษาลงมือทำที่ศูนย์ฝึก</p>
                    <div class=" w-100 d-flex justify-content-center justify-content-md-start">
                        <button class="btn mt-3 " style="
                            border-radius:30px;
                            width: 300px;

                            background-color: #F9C226;
                            font-size: 1.5em;">
                            <a href="/contact" style="color: inherit;">
                                <p class="m-0 p-0" style="font-weight: 500">ค้นหาคนที่ใช่</p>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column mt-5 p-4">
            <h1>บทความ</h1>
            <div class=" d-flex flex-row col-12 p-0 m-0">
                <div class="col-6 " style="">
                    <img class=" w-100  p-0 mr-2 rounded  " style=" height: 300px;" src="{{ asset('/access/images/photo-7.png') }}">
                </div>
                <div class="col-6 w-100  p-0 ml-2 rounded" style="">
                    <img class=" w-100  p-0 mr-2 rounded  " style=" height: 300px;" src="{{ asset('/access/images/photo-8.png') }}"></div>
            </div>
            <div class=" d-flex flex-row align-items-center justify-content-center ">
                <a href="#" class=" d-flex flex-row align-items-center justify-content-center">
                    <p class=" text-center mt-3">แสดงเพิ่มเติม</p>
                    <i class="fas fa-chevron-down ml-2"></i>
                </a>
            </div>
        </div>
    </div>
</div> --}}

@endsection
