@include('component.header')
{{--@extends('layout.app')--}}
@extends('layout.master')

@section('title', 'COURSE PAGE')

@section('content')

    <div class="">
        <div class="container-fluid px-0">
            <div class="row ml-0 mr-0">
                <div class="course-banner col-md-12 d-flex justify-content-center align-items-center">
                    <h1>INFOGRAPHIC วิธีค้น</h1>
                </div>
            </div>
        </div>
            <div class="course-search col-md-12 d-flex align-items-lg-center">
                <div class="container">
                    <div class="row mr-0 ml-0">
                         @include('component.search-select-item')
                    </div>
                </div>
            </div>

            <div class="course-popular  ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="course-pop-name" style="font-size: 1.875em">คอร์สเรียนยอดนิยม</h1>
                    </div>
                    <div class="col-12 ">
                        <div class="row d-flex ">

                            @foreach($dataCourse as $row)

                                <a href="{{route('course.edit', $row->id)}}" class="course-select-row d-flex flex-row  m-2 mb-4" style="text-decoration: none;">
                                    <div class="course-part d-flex flex-column">
                                        <div class="course-part-image img-responsive">
                                            <div class="d-flex flex-row justify-content-md-between p-2">
                                                <div class="open-course ">เปิดรับสมัคร</div>
                                                <div class="open-online">มีสอนออนไลน์</div>
                                            </div>
                                        </div>
                                        <div class="course-part-detail p-3 d-flex flex-column">

                                            <h3 class="course-name">{{$row->course_name}}</h3>
                                            <div class=" course-time d-flex flex-row">
                                                <i class="fab fa-accusoft mr-2"></i>
                                                <p class="m-0">จ-ศ 9:00-15:00 </p>
                                            </div>
                                            <div class="course-hour d-flex flex-row">
                                                <i class="fab fa-accessible-icon mr-2"></i>
                                                <p class="m-0">80 ชั่วโมง</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                    </div>

                </div>
            </div>

            <div class="course-all ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 p-3">
                            <h1 style="font-size: 1.875em">คอร์สทั้งหมด</h1>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex flex-row">

                                    <?php

                                    $coursenames = array('เบเกอรี่','เบเกอรี่', 'เบเกอรี่','เบเกอรี่','เบเกอรี่','เบเกอรี่', 'เบเกอรี่','เบเกอรี่','เบเกอรี่',);
                                    $coursetimes = array('80' ,'เบเกอรี่','80' ,'เบเกอรี่',);

                                    // foreach ($locations as  $location)

                                    foreach ($coursenames as  $coursename) {
                                    ?>
                                        @include('component.course-all')
                                    <?php
                                    }
                                    ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection

