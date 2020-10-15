@include('component.header')
@extends('layout.master')

@section('title', 'Home Page')


@section('content')
    <div class="herobanner">
                    {{-- <img class=" img-fluid col-12 p-0" src="{{ asset('/access/images/hero-banner-1.png') }}" alt="Responsive image" style="background-color: red; height: 50vh;"> --}}
                    <div class="container">
                        <div class="row d-flex flex-row" style="height: 50vh;">
                            <div class="col-12 d-flex flex-row">
                                <div class="col-5 text-light d-flex flex-column  justify-content-end align-items-start">
                                    <h2 class="dropshadow">ค้นหาหลักสูตรที่ใช่สำหรับคุณ</h2>
                                    <p class="dropshadow">เพื่อพัฒนาตนเอง และนำไปเป็นอาชีพต่อไป</p>
                                </div>
                                <div class="co-7 h-100 w-100">
                                    <div class="col-12 d-flex flex-row  h-100 w-100 align-items-end justify-content-start" style="">
                                        <div class=" d-flex flex-row " >
                                            {{-- <div class=" location d-flex flex-row justify-content-around align-items-center p-2 bg-light  rounded ml-2 mr-2" >

                                            </div> --}}
{{--                                            @include('component.select-home')--}}
                                            <div class="select-item d-flex flex-row mb-3" style="width: 100%; ">

                                                <div class=" d-flex flex-row justify-content-md-center align-items-lg-center">
                                                    <button class="btn select-item-wrapper-home dropdown-toggle d-flex align-items-lg-center justify-content-lg-center "
                                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class=" d-flex flex-row">
                                                            <i class="fas fa-map-marker-alt fa-lg select-icon ml-1 mr-1"></i>
                                                            <div class="select-text ml-1 mr-1">สถานที่เรียน</div>
                                                        </div>
                                                    </button>
                                                    <select class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <option class="dropdown-item" href="#">กรุงเทพฯ</option>
                                                        <option class="dropdown-item" href="#">สระบุรี</option>
                                                        <option class="dropdown-item" href="#">ลพบุรี</option>
                                                    </select>

                                                    <div class="select-item-wrapper-home d-flex align-items-lg-center justify-content-lg-center ml-3 mr-3">
                                                        <div class="select-text ml-1 mr-1">ค้นหา</div>
                                                        <input class="pl-2 pr-2" placeholder="ชื่อคอร์สเรียน, ชื่อวิชาเรียน, อื่นๆ" style="border:none;">
                                                    </div>
                                                    <button type="submit" class=" btn  d-flextext-center" style="border-radius: 20px; width:200px;height: 50px; background-color:#FFC00F;" >
                                                        <p class="p-0 m-0">ค้นหา</p>
                                                    </button>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <img  class=" bg-light" src=" {{ asset('/access/images/photo-10.png') }}" style="width: 100%; height: 260px;border-radius: 20px; ">
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
    {{-- <div class="container">
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
    </div> --}}

    <div class="course-all  pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                    <div class=" d-flex flex-row mb-3 justify-content-between align-items-center w-100">
                        <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนยอดนิยม</h1>
                        <button class="btn  " style="
                        border-radius:20px;
                        width: 300px;

                        background-color: #F9C226;
                        font-size: 1.2em;">
                        <p class="m-0 p-0" style="font-weight: 500">ค้นหาคอร์สเรียน</p>
                        </button>
                    </div>

                    <div class=" d-flex flex-row">
                        <p class="p-0 m-2"></p>
                    </div>
            </div>
            <div class="col-12 p-0 m-0">
                <?php
                    for ($i = 1; $i <= 3; $i++) {
                ?>
                    <div class=" col-4  p-2   float-left " >
                        <div class=" w-100 ">
                                <div class=" position-relative">
                                    <div class="d-flex flex-row w-100 justify-content-md-between p-3 position-absolute">
                                        <div class="open-course ">เปิดรับสมัคร</div>
                                        <div class="open-online  ">มีสอนออนไลน์</div>
                                    </div>
                                    <img src="{{ asset('/access/images/photo-5.png') }}" class="insutition-all">
                                </div>
                            <div class="  d-flex flex-column text-insutition pl-3 pt-" style="">
                                <div class=" d-flex justify-content-between mt-2">
                                    <p class="" style="font-size: 1em;">เบเกอรี่</p>
                                    <p class=" mr-3" style="font-size: 1em;">ฟรี</p>
                                </div>
                                <div class=" d-flex flex-row ">
                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                    <p class="ml-2 mr-2 mb-1 p-0">จ-ศ 9:00 - 15:00</p>
                                </div>
                                <div class=" d-flex justify-content-between">
                                    <div class=" d-flex flex-row ">
                                        <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                        <p class="ml-2 mr-2">90 ชั่วโมง</p>
                                    </div>
                                    <p class=" mr-3" style="font-size: 1em;">ศูนย์ฝึกอาชีพเขตมีนบุรี</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 rounded pt-3 pb-3 d-flex w-100 justify-content-md-between flex-row align-items-center p-4" style="background-color: #F7EDFF;">
                <i class="fas fa-chevron-left fa-2x"></i>
                <div class=" d-flex flex-column pt-3 text-center justify-content-center align-items-center">
                    <img class=" rounded-circle " style="width: 200px; height: 200px; " src="{{ asset('/access/images/photo-4.jpeg') }}">
                    <h1 class=" text-break mt-3" style="font-size: 1.775em; font-weight:600;">“ที่นี่ทำให้ผมได้พัฒนาตนเอง </h1>
                    <h1  class="m-0 p-0" style="font-size: 1.775em; font-weight:600;">และมีผู้ติดต่อเข้ามาเพื่อไปทำงานกับบริษัทมากขึ้นอีกด้วย”</h1>
                    <h2 class="mt-3 " style="font-size: 1.5em; font-weight:400;">นายประสิทธิ์ แสงสว่างจ้า</h2>
                    <p style="font-size: 1em;font-weight:400;">จบจากคอร์สเรียน ศูนย์ฝึกอาชีพมีนบุรี</p>
                </div>
                <i class="fas fa-chevron-right fa-2x"></i>
            </div>
        </div>
    </div>
    <div class=" " style="background-color: #69299C">
        <div class="container" style="background-color: #69299C">
            <div class="row d-flex flex-row " style="margin-top: 100px">
                <div class="col-7 p-3 text-light">
                    <div class="col-12 d-inline-flex p-1 flex-column align-items-end justify-content-center">
                        <h1 class=" text-break mt-3" style="font-size: 1.775em; font-weight:600;">ประชาสัมพันธ์หลักสูตรสถาบันของคุณ </h1>
                        <h1  class="mb-4 p-0" style="font-size: 1.775em; font-weight:600;">ฟรี! ไม่เสียค่าใช้จ่าย</h1>
                        <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">หากท่านเป็นสถาบันหรือสถานที่สอนวิชาชีพต่างๆ</p>
                        <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">ให้เราเป็นอีกทางเลือกในการเข้าถึงคนที่สนใจมากขึ้น</p>
                        <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">“เพราะเราเป็นแหล่งรวบรวมคอร์สเรียนและผู้ใช้ที่รักพัฒนาตนเองมากที่สุด”</p>
                        <button class="btn mt-3 " style="
                        border-radius:30px;
                        width: 300px;

                        background-color: #F9C226;
                        font-size: 1.5em;">
                        <p class="m-0 p-0" style="font-weight: 500">สมัครลงหลักสูตร</p>
                        </button>
                    </div>


                </div>
                <div class="col-5 position-relative">
                        <img class=" rounded image-home" style=" height: 350px; width:350px " src="{{ asset('/access/images/photo-5.png') }}">
                </div>

            </div>
        </div>
    </div>
    <div class="  " style="background-color: #7395F9">
        <div class="container" style="background-color: #7395F9">
            <div class="row d-flex flex-row  " style="margin-top: 120px">

                <div class="col-5 position-relative">
                        <img class=" rounded image-home" style=" height: 350px; width:350px " src="{{ asset('/access/images/photo-6.png') }}">
                </div>
                <div class="col-7 text-light" style="padding: 60px 0px 60px 0px">
                    <div class="col-12 d-inline-flex p-1 flex-column align-items-start justify-content-center">

                        <h1  class="mb-4 p-0" style="font-size: 1.775em; font-weight:600;">ค้นหาคนที่ใช่สำหรับบริษัทของคุณ</h1>
                        <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">หากคุณกำลังมองหาพนักงานที่ใช่ ทักษะความสามารถที่ตรงใจ</p>
                        <p class="m-0 p-0" style="font-size: 1em;font-weight:400;">เรารวบรวมรายชื่อผู้ที่ผ่านการอบรมหลักสูตรวิชาชีพไว้มากที่สุด</p>
                        <button class="btn mt-3 " style="
                        border-radius:30px;
                        width: 300px;

                        background-color: #F9C226;
                        font-size: 1.5em;">
                        <p class="m-0 p-0" style="font-weight: 500">สมัครลงหลักสูตร</p>
                        </button>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container">
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
    </div>

@endsection
