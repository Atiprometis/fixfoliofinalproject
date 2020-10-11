@include('component.header')
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
                            ​​<?php

                            $coursenames = array('เบเกอรี่', 'ช่างไฟ', 'ช่างแอร์', );
                            $coursetimes = array('80' , '120','20');

                            // foreach ($locations as  $location)

                            foreach ($coursenames as  $coursename) {
                            ?>
                            @include('component.course-select')
                            <?php
                            }
                            ?>
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

