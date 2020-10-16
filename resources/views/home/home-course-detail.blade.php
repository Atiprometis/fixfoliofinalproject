@include('component.header')
@extends('layout.master')

@section('content')
    <img class=" img-fluid col-12 p-0" src="{{ asset('access/images/hero-banner-1.png') }}" alt="Responsive image" style="background-color: red; height: 50vh;">
    <div class="container">
        <div class="row">
            {{-- 1 --}}
            <div class="1 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-7 ">
                    <h2 class="">{{$dataHomeEdit->course_name}}</h2>
                    {{-- <h4 class="">ชื่อโรงเรียน {{$dataHomeEdit->course_school_name}}</h4> --}}
                    <p class="mt-3 ">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text
                        ever since the 1500s, when an unknown printer took Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took Lorem Ipsum is simply dummy text
                        of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown
                    </p>
                </div>
                <div class="box-register-all d-flex flex-column col-lg-3 offset-lg-0 p-0" >
                    <a href="/registercourse" class="btn  register-open-website-b " style="height: 40px; background-color: #F9C226; border-radius: 20px;">ลงทะเบียนเรียน</a>
                    <div class="register-time d-flex flex-column mt-3" >
                        <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                            <h1 class=" p-0 m-0" style="font-size: 1.125em;">ใบประกอบวิชาชีพ</h1>
                        </div>
                        <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                            <div class=" d-flex flex-row  justify-content-center ">
                                {{-- <i class="fab fa-accusoft mr-2"></i> --}}
                                <p>มี</p>
                            </div>

                        </div>
                    </div>
                    <div class="register-time d-flex flex-column mt-3" >
                        <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                            <h1 class=" p-0 m-0" style="font-size: 1.125em;">ราคา</h1>
                        </div>
                        <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                            <div class=" d-flex flex-row  justify-content-center ">
                                {{-- <i class="fab fa-accusoft mr-2"></i> --}}
                                <p>ไม่เสียค่าใช้จ่าย</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- 2 --}}
            <div class="2 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                    <ul>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                    </ul>
                </div>
                <div class="register-time d-flex flex-column mt-3 p-0 m-0 col-3 w-100" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ช่วงรับสมัคร</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3  " style="border: solid #000 1px;">
                        <div class=" d-flex flex-column  justify-content-center text-center">
                            {{-- <i class="fab fa-accusoft mr-2"></i> --}}
                            <p>เปิด 15 กค - 15 สค 2020</p>
                            <p>ปิด  15 สค 2020</p>
                            <p>หรือปิดรับสมัครเมื่อคอร์สเต็ม</p>
                        </div>

                    </div>
                </div>
            </div>
            {{-- 3 --}}
            <div class="3 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6 ">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                    <ul>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                    </ul>
                </div>
                <div class="register-time d-flex flex-column mt-3 p-0 m-0 col-3 w-100" >
                    <div class="time-text rounded-top text-light text-center align-items-center p-2" style="border: solid #000 1px; background-color: #69299C;">
                        <h1 class=" p-0 m-0" style="font-size: 1.125em;">ช่วงเวลาเรียน</h1>
                    </div>
                    <div class="time-text rounded-bottom d-flex flex-column p-3 " style="border: solid #000 1px;">
                        <div class=" d-flex flex-column  justify-content-center text-center">
                            {{-- <i class="fab fa-accusoft mr-2"></i> --}}
                            <p>80 ชั่วโมง </p>
                            <div class=" d-flex flex-row justify-content-center">
                                <p class=" m-0 p-0 mr-3">จันทร์ - ศุกร์</p>
                                <p class=" m-0 p-0 mr-3">9:00 - 14:00 น.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            {{-- 4 --}}
            <div class="4 col-lg-12 d-flex flex-row p-4 mt-4 justify-content-between">
                <div class="class-all d-flex flex-column col-lg-6 ">
                    <h1 class="" style="font-size: 1.500em">คอร์สนี้เรียนอะไรบ้าง</h1>
                    <ul>
                        <li>Coffee</li>
                        <li>Tea</li>
                        <li>Milk</li>
                    </ul>
                </div>

            </div>
            {{-- 5 youtube --}}

            <div class="youtube-photo d-flex flex-column col-lg-12 mb-5 p-3">
            <div class=" col-lg-12 d-flex flex-column p-0  ml-2 ">
                    <h1 class="" style="font-size: 1.500em">วิดิโอคอร์สเรียน</h1>
                    <?php
                    for($i=0;$i<3;$i++){
                    ?>
                        <div class="youtube-link">
                            <div class=" d-flex flex-row justify-content-xl-between w-75">
                                <p class="p-0 m-0">ผัดไทเส้นจันกุ้งสด</p>
                                <a href="#"><i class="far fa-play-circle fa-2x"></i></a>
                            </div>
                            <div class=" mt-3 mb-3 w-75" style="border: solid 1px #c1c1c1"></div>
                        </div>
                    <?php
                    }
                    ?>


            </div>
                <p class="m-0 p-0 ml-2">ภาพประกอบการเรียน</p>
                <div class="image-all d-flex flex-row flex-wrap justify-content-center align-items-center rounded col-lg-12 p-0" style="width: 100%">
                    <img src=" {{ asset('access/images/learn-1.png') }}" class=" m-1 mt-2  rounded" style="height: 200px; width: 24%">
                    <img src="{{ asset('access/images/learn-2.png') }}" class=" m-1 mt-2 rounded" style="height: 200px; width: 24%">
                    <img src="{{ asset('access/images/learn-3.png') }}" class=" m-1 mt-2 rounded" style="height: 200px; width: 24%">
                    <img src="{{ asset('access/images/learn-4.png') }}" class=" m-1 mt-2 rounded" style="height: 200px; width: 24%">

                </div>
            </div>
        </div>
    </div>
@endsection

