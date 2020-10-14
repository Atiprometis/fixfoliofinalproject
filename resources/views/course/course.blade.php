@include('component.header')
{{--@extends('layout.app')--}}
@extends('layout.master')

@section('title', 'COURSE PAGE')

@section('content')

    <div class="">
        <div class="container px-0">
            <div class="row">
                <div class="col-12 mt-3 mb-4">
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                ?>
                    <div class="col-2 mt-3 float-left position-relative d-flex justify-content-center  " >
                        <div class="b-image " style="height: 106px; border-radius: 20px; background-color:#000;"></div>
                        <img src=" {{ asset('/access/images/photo-6.png') }}" class="w-100 "  style="height: 106px; border-radius: 20px;">
                        <p class="  text-c  text-light m-0 p-0 ">อาหารและการครัว</p>
                    </div>
                    <?php
                }
                ?>
                </div>
            </div>
        </div>

            <div class="course-search pt-4 pb-2 col-md-12 d-flex align-items-lg-center " style="background-color: #69299C">
                <div class="container">
                    <div class="row mr-0 ml-0 d-flex flex-column">
                         @include('component.search-select-item')
                        <div class=" d-flex flex-row pt-3 pb-3">
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">เรียนฟรี</p>
                            </a>
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">กำลังเปิดรับสมัคร</p>
                            </a>
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">เรียนออนไลน์</p>
                            </a>
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">กำลังเปิดรับสมัคร</p>
                            </a>
                            <a href="#" style="color:#F9C226; ">
                                <p class="p-0 m-0 mr-3">เรียนฟรี</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="course-all ">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                            <h1 class="p-0 m-0 ml-2" style="font-size: 1.750em;">คอร์สเรียนทั้งหมด</h1>
                            <div class=" d-flex flex-row">
                                <p class="p-0 m-2"></p>
                            </div>
                    </div>
                    <div class="col-12 p-0 m-0">
                        <?php
                            for ($i = 1; $i <= 12; $i++) {
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
    </div>
@endsection

