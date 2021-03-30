{{-- @include('component.header') --}}

@extends('layout.master')

@section('title', 'institution')

@section('content')
    <div class="container">
        <div class="row">

            <div class="profile rounded col-12 d-flex flex-row mt-5 mb-4 align-items-center flex-wrap justify-content-center justify-content-md-start">
                <div class="   col-12 col-md-3">
                    {{-- @foreach ($schoolsdetails as $schoolsdetail_images) --}}

                    @if ($schoolsdetails[0]['school_image'] != null)
                    <img class="card-img-top rounded-circle" src='../imagesSchools/{{ $schoolsdetails[0]['schools_owner'] }}/{{ $schoolsdetails[0]['school_image']  }}' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                    @else
                    <img class="card-img-top rounded-circle" src='../access/imageweb/school1.jpg' alt="Card image cap" style="height: 250px;border: 1px solid #c1c1c1;">
                    @endif

                    {{-- <img class="card-img-top  rounded-circle" src='s' alt="Card image cap" style="height: 250px; border: 1px solid #c1c1c1"> --}}
                    {{-- @endforeach --}}
                </div>
                <div class=" col-12 col-md-9 pt-4 pt-md-0">
                    <div class=" d-flex flex-column  ">
                        <div class=" d-flex flex-row justify-content-center justify-content-md-start">
                            <div class=" d-flex flex-column  ">
                                    <div class="name ml-3 ">
                                        <h2 style="color: #69299C; font-size: 3.2vh;">{{ $schoolsdetails[0]['schools_name'] }}</h2>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="aboutme rounded p-0 " >
                        <div class=" d-flex flex-row justify-content-center justify-content-md-start">
                            <h1 style="font-size: 1.250em; font-weight: 400;">คอร์สเรียนทั้งหมด</h1>
                            <h1 class="ml-2 text-center" style="font-size: 1.250em;   font-weight: 400; color: #69299C;">{{ $count }}</h1>
                        </div>
                        <div class="about-text  p-0 text-center text-md-left rounded " style="height: auto">
                            <p class="p-0 m-0">
                                {{ $schoolsdetails[0]['schools_detail'] }}
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-12 d-flex flex-wrap mt-5">
                    <div class="d-flex col-12 col-md-6 col-lg-3 p-0 m-0  flex-row align-items-center form-group">
                        <i class="fab fa-facebook-square" style="color: #0037b7"></i>
                        <p class="p-0 m-0 ml-2 text-truncate">{{ $schoolsdetails[0]['facebook'] }}</p>
                        {{-- <input class="form-control" value="{{ $schoolsdetails->phone }}" name="school_phone" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" type="text" placeholder="เบอร์โทรศัพท์"> --}}
                    </div>
                    <div class="d-flex col-12 col-md-6 col-lg-2 p-0 m-0  flex-row align-items-center form-group">
                        <i class="fas fa-phone" style="color: #FF4444"></i>
                        <p class="p-0 m-0 ml-2 text-truncate">{{ $schoolsdetails[0]['phone'] }}</p>
                        {{-- <input class="form-control" value="{{ $schoolsdetails->phone }}" name="school_phone" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" type="text" placeholder="เบอร์โทรศัพท์"> --}}
                    </div>
                    <div class="d-flex  col-12 col-md-6 col-lg-3  p-0 m-0  flex-row align-items-center form-group">
                        <i class="fab fa-line" style="color: #4CB234"></i>
                        <p class="p-0 m-0 ml-2 text-truncate">{{ $schoolsdetails[0]['line'] }}</p>
                        {{-- <input class="form-control" value="{{ $schoolsdetails->phone }}" name="school_phone" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" type="text" placeholder="เบอร์โทรศัพท์"> --}}
                    </div>
                    <div class="d-flex col-12 col-md-6 col-lg-3  p-0 m-0  flex-row align-items-center form-group">
                        <i class="fas fa-envelope-open-text" style="color: #F89A1E"></i>
                        <p class="p-0 m-0 ml-2 text-truncate">{{ $schoolsdetails[0]['email'] }}</p>
                        {{-- <input class="form-control" value="{{ $schoolsdetails->phone }}" name="school_phone" pattern="[0]{1}[0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" type="text" placeholder="เบอร์โทรศัพท์"> --}}
                    </div>
                </div>
            </div>


                <div class="d-flex flex-row w-100 text-institution align-items-end justify-content-between">
                        {{-- @foreach ($schoolsdetails as $schoolsdetail_nameschool2) --}}
                        <h2 class="p-0 m-0 ml-2" style="font-size: 2.3vh;">คอร์สเรียนสอนโดย {{ $schoolsdetails[0]['schools_name'] }}</h2>
                        {{-- @endforeach --}}
                        <div class=" d-flex flex-row">
                            <p class="p-0 m-2"></p>
                        </div>
                </div>
                <div class="col-12 p-0 m-0">

                    @foreach ($coursesdetails as $course)
                            @if ($course->status != 0)
                            <a href="{{route('course-detail.show', $course->course_id)}}" style="color: inherit;">
                                <div class=" col-12 col-md-6 col-lg-3  p-2   float-left " >
                                    <div class=" w-100 " >
                                            <div class=" position-relative">
                                                <div class="d-flex flex-row w-100 justify-content-md-between p-3 position-absolute">
                                                    {{-- <div class="open-course ">เปิดรับสมัคร</div> --}}
                                                    {{-- <div class="open-online  ">มีสอนออนไลน์</div> --}}
                                                </div>
                                                @foreach ($thumbnail as $image)
                                                    @if ($image->course_id == $course->course_id)
                                                    <img src="{{ asset('/course/thumbnail/'.$image->thumbnails_images.'') }}" class="insutition-all">
                                                    @endif
                                                @endforeach
                                            </div>
                                        <div class="  d-flex flex-column text-insutition pl-3 pt-1" style="height: 140px">
                                            <div class=" d-flex justify-content-between mt-2">
                                                <p class="d-inline-block text-truncate" style="font-size: 1em;">{{ $course->course_name }}</p>
                                                <p class="pl-2 mr-3" style="font-size: 1em;">{{ $course->course_cost }}</p>
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
                                                         เวลา {{ $course->course_learn_start }} - {{ $course->course_learn_end }} น.
                                                </p>
                                            </div>
                                            <div class=" d-flex justify-content-between">
                                                <div class=" d-flex flex-row ">
                                                    <i class="far fa-calendar-alt fa-1x" class="ml-2 mr-2"></i>
                                                    <p class="ml-2 mr-2">{{ $course->course_hours }} ชั่วโมง</p>
                                                </div>

                                                <p class=" mr-3" style="font-size: 1em;">
                                                                {{$schoolsdetails[0]['schools_name']}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @endif
                    @endforeach

                </div>
                {{-- <div class=" d-flex w-100 flex-row align-items-center justify-content-center ">
                    <a href="#" class=" d-flex flex-row align-items-center justify-content-center">
                        <p class=" text-center mt-3">แสดงเพิ่มเติม</p>
                        <i class="fas fa-chevron-down ml-2"></i>
                    </a>
                </div> --}}

        </div>
        </div>
    </div>
@endsection
