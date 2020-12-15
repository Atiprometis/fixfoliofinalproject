
@extends('layout.master')

@section('title', 'COURSE PAGE')

@section('content')

    <div class="">
        <div class="container px-0">
            <div class="row">
                <div class="col-12 mt-3 mb-4">
                    <?php
                    $category = [];
                    $coursenames = array('อาหารและการครัว','ตัดเย็บ', 'งานช่าง', 'เสริมสวย', 'ภาษาต่างประเทศ', 'นวด', 'งานฝีมือ');
                    // $count = array('80' ,'เบเกอรี่','80' ,'เบเกอรี่',);
                    $count = 1;
                    foreach ($coursenames as  $coursename) {
                ?>
                    <div class="col-2 mt-3 float-left position-relative d-flex justify-content-center  " >
                        <div class="b-image " style="height: 106px; border-radius: 20px; background-color:#000;"></div>
                        <img src=" {{ asset('/access/images/category-'.$count.'.png') }}" class="w-100 "  style="height: 106px; border-radius: 20px;">
                        <p class="  text-c  text-light m-0 p-0 "><?php echo $coursename?></p>
                    </div>
                    <?php
                    $count++;
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="course-all ">
                <div class="container">
                    <div class="row">
                        <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                            <h1 class="p-0 m-0 ml-2 mt-5 mb-2" style="font-size: 1.750em;">คอร์สเรียนทั้งหมด</h1>
                            <div class=" d-flex flex-row">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input  " type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">เรียนออนไลน์</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input " type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">เรียนที่ศูนย์ฝึกอบรม</label>
                                  </div>

                                <p class="p-0 m-2"></p>
                            </div>
                    </div>
                    <div class="col-12 p-0 m-0">

                        @foreach($readSchoolname as $data)

{{--                            <a href="{{route('course.show',$data->id)}}" style="color: inherit;">--}}

                            <a href="{{route('course.show',$data->course_id)}}" style="color: inherit;">

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
                                                <p class="" style="font-size: 1em;">{{$data->course_name}}</p>
                                                <p class=" mr-3" style="font-size: 1em;">{{$data->course_cost}}</p>
                                            </div>
                                            <div class=" d-flex flex-row ">
                                                <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                <p class="ml-2 mr-2 mb-1 p-0">{{$data->course_start}} - {{$data->course_end}} เวลา {{\Carbon\Carbon::createFromFormat('H:i:s',$data->course_learn_start)->format('H:i')}} - {{\Carbon\Carbon::createFromFormat('H:i:s',$data->course_learn_end)->format('H:i')}} น.</p>
                                            </div>
                                            <div class=" d-flex justify-content-between">
                                                <div class=" d-flex flex-row ">
                                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                    <p class="ml-2 mr-2">{{$data->course_hours}} ชั่วโมง</p>
                                                </div>

                                                <p class=" mr-3" style="font-size: 1em;">{{$data->schools_name}}</p>

                                            </div>
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
@endsection

